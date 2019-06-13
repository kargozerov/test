<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);


require_once "FitnesConstants.php";

class Fitness
{
	private $zones = [];//тренажерный зал + бассейн + групповые занятия

	public function __construct()
	{
		$this->clearZones();
	}
	public function closeFitnes()//фитнес закрывается (пустой массив делаем всех прогнали)
	{ 
		$this->clearZones();
	}
	private function clearZones() // private --- Доступен только в пределах класса
	{
		$this->zones[FitnesConstants::GYM] = []; 
		$this->zones[FitnesConstants::SWIMMING_POOL] = []; 
		$this->zones[FitnesConstants::GROUP_TRAINING] = [];
	}

	public function addClient(Pass $pass, string $zoneType)// Добавляем клиента
	{
		if(!in_array($zoneType, $pass->setLocations())){ //если есть значение в массиве $zoneType то мы пускаем в локацию
			echo $this->getMessage($pass->getClientData(), FitnesConstants::LOCATION_ERROR);
			return;
		}
		$dateEnd = $pass->getDateRegEnd()->format('Y-m-d'); //получили данные когда закончится абонемент (format - получается строчка в зависимости от того что передали)
		$currenDate = date_create()->format('Y-m-d'); // текущая дата
		var_dump($dateEnd, $currenDate);
	}
	private function getMessage(ClientData, string $message){ //выносим сообщения в функцию
		return $ClientData->getName() . ', ' . $message . "<br>"; //получаем имя из объекта ClientData
	}
}














 ?>