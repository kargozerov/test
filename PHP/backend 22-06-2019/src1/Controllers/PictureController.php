<?php 
require_once 'src/Models/PictureRepository.php';
require_once 'src/Controllers/Controller.php';


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
     $content='Picture.php'; // имя файла с контентом
     $template='template.php'; // имя шаблона, в который будем вставлять контент
     $data=[
         'title'=>'Картинки',
         'pictures' => $picture
     ];
     //var_dump($data);
     echo parent::renderPage($content, $template, $data);
  }
}





 ?>