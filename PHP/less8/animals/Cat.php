<?php 
require_once "Pet.php"; //подключили файл
//класс Cat наследует (расширяет) класс Pet, и получает доступ ко всем не private свойствам иметодам
class Cat extends Pet{
	//parent::имя_метода() для вызова метода родителя внутри дочернего класса
	public function __construct(int, $age){
		parent::__construct($age); //вызвали конструктор из класса Pet
	}
}
// переопределение  метода родителя 
public function run(){
	parent::run(); //вызов run() родителя
	echo "$this->name бежит БЫСТРО<br>";//расширение метода run() родителя
}





 ?>