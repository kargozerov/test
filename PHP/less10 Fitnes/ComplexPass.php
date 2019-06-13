<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class Complex extends Pass 
{
	public function __construct(ClientData $clientData)
	{
		//обращение к методу родительского класса
		parent::__construct($clientData);
		//dateRegEnd = date_create(); -- не надо так как он не действует один день
		$this->endTime = date_create("22:00");
		$this->locations = [FitnesConstants::GYM, FitnesConstants::SWIMMING_POOL, FitnesConstants::GROUP_TRAINING];//тренажерный зал + бассейн + груповые ( константы из класса -- FitnesConstants)
	}
}







 ?>