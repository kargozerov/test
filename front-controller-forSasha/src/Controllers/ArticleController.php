<?php
namespace  Max\FrontController\Controllers;
use Max\FrontController\Controllers\Controller;



class ArticleController extends Controller
{

    public function showAction(){
        echo "Генерация страницы статей";
        $content='articles.php';
        $template='template.php';
        $data=[
            'title'=>'Статьи'
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
