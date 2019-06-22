<?php
namespace User1\FrontController\Controllers;

/**
 *
 */
class Controller
{

  function __construct()
  {
    // code...
  }

  public function renderPage($content,$template,$data=[]){
      // разбивает массив на $data на переменные, ключи становятся имянами переменных,
      // значения - значениями этих переменных
      extract($data);
      
      // для нашего примера из массива получим переменную $title = 'Правила'

      ob_start();
      include_once __DIR__.'/../Views/'.$template;
      // подключили файл template.php (получили все содержимое этого файла)
      // в файле template.php на место переменной $content подставится ее значение - rules.php, получается, что
      // в файле template.php подключили файл rules.php (содержимое этого файла)
      // в файле template.php на место переменной $title подставится ее значение Правила,
      // и в теге title сформируется заголовок страницы

      // читаем html в переменную $page
      $page=ob_get_contents();
      ob_end_clean();
      // возвращаем значение переменной $page
      return $page;
  }
}
