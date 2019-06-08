<?php 

class Pet {
//значение свойства по-умолчанию
	// модификатор protected означает - что свойство или метод достпуны внутри родительского и дочерних классов
	protected $name = 'Без имени';
	private $age = 0;

	public function __construct($age){
			$this->age = $age;
	}	
		//CСЕТТОРЫ
	public function setName($name){
		//if(!is_string($title)){return false;}
		$this->name = $name;
	}
		//ГЕТТЕРЫ
	public function getName(){
		return $this->name;
	}
	public function getAge(){
		return $this->age;
	}
	//МЕТОДЫ//////
	public function run(){
		echo "$this->name бежит<br>";
	}
	public function stop(){
		echo "$this->name остановился<br>";
	}

}




 ?>