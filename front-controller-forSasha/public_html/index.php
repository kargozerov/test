<?php

require_once __DIR__ . '/../vendor/autoload.php';
use Max\FrontController\Core\Router;

// require_once __DIR__.'/../src/Controllers/IndexController.php';
// require_once __DIR__.'/../src/Controllers/InfoController.php';
// require_once __DIR__.'/../src/Controllers/ArticleController.php';
// require_once __DIR__.'/../src/Controllers/Controller.php';
// require_once __DIR__.'/../src/Controllers/PictureController.php';
// require_once  __DIR__.'/../src/Core/Router.php';

// все запросы от клинта будут перенаправлены на данную страницу

// запуск статического метода run() класса Router
// маршрутизатор обрабатывает запросы исходя из следующего правила: /имя_контроллера/имя_метода/данные

Router::run();

//принцип работы роутера
/*if ($uri=='/'){
    $controller=new IndexController();
    $controller->indexAction();
}elseif ($uri=="/info/rules"){
    $controller=new InfoController();
    $controller->rulesAction();
} *///и т.д.

// Взаимодействие между клиентом и сервером

//1. Клиент отправлят запрос / , сервер возвращает главную страницу
//2. Клиент отправлят запрос /picture/show/2 (где 2 - id картины), сервер возвращает страницу с описанием одной картины
//3. Клиент отправлят запрос /article/show, сервер возвращает страницу со статьями
//4. Клиент отправлят запрос /article/show/2 (где 2 - id статьи), сервер возвращает страницу с описанием одной статьи
//5. Клиент отправлят запрос /info/rules, сервер возвращает страницу c описанием правил покупки и заказа картин
//6. Клиент отправлят запрос /info/contacts, ервер возвращает страницу с контактами

// FIXME: + запросы на добавление статей и картин
