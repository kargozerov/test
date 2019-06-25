<?php
// require_once 'Controller.php';
// require_once __DIR__ . '/../Models/PictureRepository.php';
namespace User1\FrontController\Controllers;
use User1\FrontController\Controllers\Controller;
use User1\FrontController\Controllers\Models\PictureRepository;

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

}
