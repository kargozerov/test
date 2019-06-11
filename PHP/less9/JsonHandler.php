<?php 
//require_once "IParamHandler.php";//поключили файл
require_once "ParamHandler.php"; //подкл класс

class JsonHandler extends ParamHandler
{
	//дублироване кода необходимо вынести ив отдельный класс
	// private $filename; //этот файл читаем
	// private $params = [];//в этот массив записываем

	// public function __construct($filename)
	// {
	// 	$this->filename = $filename;
	// }
	//реализация методов для каждого класса - УНИКАЛЬНА
	public function read(){
		echo "Читает из JSON файла <br>";
	}
	public function write(){
		echo "Запись в JSON файл <br>";
	}
	// public function addParam($key, $value){
	// 	$this->params[$key] = $value; //добавляем в массив
	// }
	// public function getAllParams(){
	// 	return $this->params; //возвращаем массив всех параметров
	// }
	// public function getParamByKey($key){
	// 	return $this->params[$key];
	// }
	
	
}


 ?>