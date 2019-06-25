<?php
namespace User1\FrontController\Controllers;

use User1\FrontController\Models\PictureRepository;
use User1\FrontController\Controllers\Controller;

// require_once __DIR__ . '/../Models/PictureRepository.php';
// require_once 'Controller.php';


class IndexController extends Controller
{
    private $pictureRepository;

    public function __construct()
    {
        $this->pictureRepository = new PictureRepository();
    }

    public function indexAction(){
        echo "Генерация главной страницы";
        $content='main.php';
        $template='template.php';
        $pictures = $this->pictureRepository->getAll();
        $data=[
            'title'=>'Главная',
            'pictures' => $pictures
        ];
        //вывели страничку $page
        echo parent::renderPage($content,$template,$data);
    }
    // public function renderPage($content,$template,$data=[]){
    //     extract($data);
    //     //преобразует массив к виду переменна($ключ = "значение") $title='Главная';
    //     ob_start();
    //     include_once __DIR__.'/../Views/'.$template;
    //     //перетащили считай все содержимое template.php
    //     // и весь этот треш гладется строкой в переменную $page
    //     $page=ob_get_contents();
    //     ob_end_clean();
    //     return $page;
    // }
}
