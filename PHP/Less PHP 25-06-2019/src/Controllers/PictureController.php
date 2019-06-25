<?php
// require_once 'Controller.php';
// require_once __DIR__ . '/../Models/PictureRepository.php';
namespace  Max\FrontController\Controllers;
use Max\FrontController\Controllers\Controller;
use Max\FrontController\Models\PictureRepository;


/**
 *
 */
class PictureController extends Controller
{
  private $pictureRepository;

  public function __construct()
  {
      $this->pictureRepository = new PictureRepository();
  }

  function showAction($id){
      //var_dump($id);
      $picture = $this->pictureRepository->getById($id);
      //var_dump($picture);
      echo "Генерация страницы с картинками";
     $content='picture.php'; // имя файла с контентом
     $template='template.php'; // имя шаблона, в который будем вставлять контент
     $data=[
         'title'=>'Картинки',
         'pictures' => $picture
     ];
     //var_dump($data);
     echo parent::renderPage($content, $template, $data);
  }


//25-06-19
  // запрос /picture/add
  public function addAction(){
    //если get запрос то отображаем форму
    if ($_SERVER['REQUEST_METHOD'] == 'GET'){
      $data = [
        'title' => 'Добавление картины'
      ];
       echo parent::renderPage('add_picture.php', 'template.php', $data); //подключаем форму для добавления картинки
    }elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
      //если post запрос обрабатываем данные
      $post = $_POST;
      $files = $_FILES;
      $params = [
        'title' => $post['title'],
        'description' => $post['description'],
        'yearCreated' => explode("-", $post['yearCreated'])[0],
        'img' => $files['img']['name']
      ];
      var_dump($params);

      

      if ($this->pictureRepository->save($params) === false){
        $addResult = 'Картина НЕ добавлена';
      }else{
        $addResult = 'Картина добавлена';
      }

      $data = [ //отрисовка формы
        'title' => 'Добавление картины',
        'addResult'=> $addResult
      ];
       echo parent::renderPage('add_picture.php', 'template.php', $data);

    }
    
  }










  //конец класса
}
