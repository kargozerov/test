<?php 
//require_once "IParamHandler.php"; // подключили интерфейс к классу (для расширения класса)
require_once "ParamHandler.php"; //подкл класс
//расширение интерфейсов реализуется словом - implements
//один класс может расширять несколько интерфейсов
//классы, расширяющие интерфейсы должны реализовывать все методы интерфейса

//наследование от абстрактного  класса ParamHandler
class TxtHandler extends ParamHandler
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
		echo "Читает из TXT файла <br>";
	}
	public function write(){
		echo "Запись в TXT файл <br>";
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