<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

//Разовый абонемент

require_once "Pass.php";
class OneTimePass extends Pass // наследник класса Pass
{
	public function __construct(ClientData $clientData)
	{
		//обращение к методу родительского класса
		parent::__construct($clientData);
		$this->dateRegEnd = date_create();//т.к. действует один день
		$this->endTime = date_create("22:00"); //посещение до 22:00
		$this->locations = [FitnesConstants::GYM, FitnesConstants::SWIMMING_POOL];//тренажерный зал + бассейн ( константы из класса -- FitnesConstants)
	}
	
}






 ?>