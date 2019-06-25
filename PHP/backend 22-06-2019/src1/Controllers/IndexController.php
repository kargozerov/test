<?php
require_once 'src/Models/PictureRepository.php';
require_once 'src/Controllers/Controller.php';
class IndexController
{
    private $pictureRepository; //картинки

    public function __construct() 
    {
        $this->pictureRepository = new pictureRepository();//в контролере есть доступ к методам репозитория
    }

    public function indexAction(){
        echo "Генерация главной страницы";
        $content='main.php';
        $template='template.php';
        $pictures = $this->pictureRepository->getAll(); //получаем все картинки (массив объектов с картинками из PictureRepository.php)
        $data=[
            'title'=>'Главная',
            'pictures'=> $pictures
        ];
        //вывели страничку $page
        echo $this->renderPage($content,$template,$data);
    }
    public function renderPage($content,$template,$data=[]){
        extract($data);
        //преобразует массив к виду переменна($ключ = "значение") $title='Главная';
        ob_start();
        include_once __DIR__.'/../Views/'.$template;
        //перетащили считай все содержимое template.php
        // и весь этот треш гладется строкой в переменную $page
        $page=ob_get_contents();
        ob_end_clean();
        return $page;
    }

}