<?php 

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//класса который хранит информацию о владельце абонемента


class ClientData
{
	private $name; // имя
	private $surname; //фаилия
	private $birthDate; //день рождение
	
	public function __construct(string $name, string $surname, DateTime $birthDate)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->birthDate = $birthDate;//объект даты будет
	}

	public function getName(){
		return $this->name;
	}

	public function getSurname(){
		return $this->surname;
	}
}







 ?>