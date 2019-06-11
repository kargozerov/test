<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once "TxtHandler.php";
require_once "ParamHandler.php"; 
$filename = 'config.json';

// в ParamHandler создаем статический метод getHandler, который в зависимости от переданного файла вернет объект либо класса TxtHandler либо JsonHandler 
$handler = ParamHandler::getHandler($filename); // :: - вызов статического метода
$handler->read();
$handler->write();




// $file_type = pathinfo($filename, PATHINFO_EXTENSION); //определили тп файла

// $handler = null;

// if($file_type == 'txt'){
// 	$handler = new TxtHandler($filename);
// } else {
// 	$handler = new JsonHandler($filename);
// }

// $handler->read();
// $handler->write();

// function some_void(IParamHandler $handler){
// 	$handler->read();
// }



 ?>