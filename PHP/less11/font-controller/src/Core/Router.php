<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
class Router
{
	public static function run(){
		// имя_контролера/имя_метода/данные
		$controller = 'Index';
		$action = 'index';
		$routes = explode('/', $_SERVER['REQUEST_URI']);
		if (!empty($routes[1])){
			//имя контролера
			$controller = $routes[1];
		}
		if (!empty($rotes[2])){
			//имя метода
			$action = $routes[2];
		}
		if (!empty($routes[3])){
			//параметры
			$params = $routes[3];
		}
		$controller = ucfirst(strtolower($controller)) . 'Controller';
		$action = strtolower($action) . 'Action';

		if(!class_exists($controller)){
			echo "Класс не найден!";
			return;
		}
		if (!method_exists($controller, $action)){ //содержится указаный метод в указаном классе
			echo "Метод не найден";
			return;
		}
		$controller = new $controller();
		$controller->$action($params);
		//Вызвали у объекта метод $controler = 'IndexController'
	}
}








 ?>