
<?php
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
class AppRequest {

  protected $_get;

  /**
   * Normalizes the request data
   * This method strips off slashes in request data if get_magic_quotes_gpc() returns true
   */
  protected function normalizeRequest() {
    if(function_exists('get_magic_quotes_gpc') && get_magic_quotes_gpc()) {
      if(isset($_GET)) {
        $_GET = $this->stripSlashes($_GET);
      }
    }
    if(isset($_GET)) {
      $this->_get = $_GET;
    }
  }

  /**
   * Returns the named GET parameter value
   * If the GET parameter does not exist, the second parameter to this method will be returned
   * @param string $name the GET parameter name
   * @param mixed|null $default the default parameter value if the GET parameter does not exist
   * @return mixed|null the GET parameter value
   */
  public function getQueryVar($name, $default = null) {
    if (isset($this->_get[$name])) {
      return $this->_get[$name];
    }
    return $default;
  }

  /**
   * Returns the request URI portion for the currently requested URL
   * @return string the request URI portion for the currently requested URL
   */
  public function getRequestUri() {
    static $requestUri;
    if (!isset($requestUri)) {
      if(isset($_SERVER['REQUEST_URI'])) {
        $requestUri = $_SERVER['REQUEST_URI'];
        if(!empty($_SERVER['HTTP_HOST'])) {
          if(strpos($requestUri, $_SERVER['HTTP_HOST']) !== false) {
            $requestUri = preg_replace('/^\w+:\/\/[^\/]+/', '', $requestUri);  // remove schema and host name "schema://host/"
          }
        } else {
          $requestUri = preg_replace('/^(http|https):\/\/[^\/]+/i', '', $requestUri); // remove schema and host name "schema://host/"
        }
      }
    }
    return $requestUri;
  }
}

$url = new AppRequest ();
var_dump ($url->getRequestUri());



require_one __DIR__ . '/src/Controllers/IndexController.php';
require_one __DIR__ . '/src/Controllers/InfoController.php';
require_one __DIR__ . '/src/Core/Router.php';

Router::run();

//принцып работы роутера
/*if ($url == '/'){
  $controller = new IndexController();
  $controller->indexAction();
} elseif ($url == "/info/rules") {
  $controller = new InfoController();
  $controller->rulesAction();
  //и т.д....
}*/
//имя_контроллера/имя_метода/данные  --- правило отправления запросов *например(/articl/show)

//Главная сттраница (страница с описание картин) КАРТИНЫ
//Картины (описание одной страницы)
//Статьи - запрос: /articl/show
//Страница с одной статьей - запрос: /articl/show/2, шдже 2 это -- id статьи
//Правила покупки и заказа - запрос /info/rules
//Контакты -запрос /info/contacts
echo "ПРОВЕРКА";






























 ?>
