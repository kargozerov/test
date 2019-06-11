<?php 
require_once "IParamHandler.php"; 
//1.абстрактный класс мождет содрежать абстрактные методы и методы с реализацией
//2.классы, которые наследуются от абстрактного должны реализовывать все его абстрактные методы или класс сам должен стать абстрактным.



abstract class ParamHandler implements IParamHandler //implements IParamHandler - расширяем интерфейсом
{
	//вставили(вынесли) то что коментили в TxtHandler и JsonHandler
		//дублирование кода из  TxtHandler и JsonHandler
	protected $filename; //этот файл читаем
	protected $params = [];//в этот массив записываем

	public function __construct($filename)
	{
		$this->filename = $filename;
	}
	public function addParam($key, $value){
		$this->params[$key] = $value; //добавляем в массив
	}
	public function getAllParams(){
		return $this->params; //возвращаем массив всех параметров
	}
	public function getParamByKey($key){
		return $this->params[$key];
	}

	// абстрактные методы (методы без реализации)
	abstract public function read();
	abstract public function write();

	public static function getHandler($filename){
		$file_type = pathinfo($filename, PATHINFO_EXTENSION);
		if(!$file_type){
			echo "Тип файла не известен";
			return false;
		}
		//формируем имя класса
		$classname = ucfirst(strtolower($file_type)) . 'Handler';
		//ucfirst(strtolower($file_type))-> Txt (получим класс TxtHandler или JsonHandler или еще что то...)
		$path = __DIR__ . '/' . $classname . '.php'; //TxtHandler.php или JsonHandler
		
		if(!is_readable($path)){
			echo "Файла не существует <br>";
			return false;
		}

		require_once $path; // подключили сгенерированые файлы
		//проверяем существует класс или нет (который подклбючили выше)
		if(!class_exists($classname)){
			echo "Класса не существует <br>";
			return false;
		}
		//если класс есть создаем объект
		$obj = new $classname($filename);
		// $handler = new TxtHandler($filename); типо создаем так
		// $handler = new JsonHandler($filename);
		if(!is_subclass_of($obj, 'IParamHandler')){ //is_subclass_of -- Проверяет, содержит ли объект obj в своем дереве предков класс IParamHandler либо прямо реализует его.
			echo "Реализован не IParamHandler интерфейс";
			return false;

		}
		//если ничего не произошло объект возвращаем
		return $obj;
	}	
}


 ?>