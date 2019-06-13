<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

class FitnesConstants
{
	//константы публичные насиная с версии php 7.1 константам можно задать модификатор достпа
	//В интерфейсах константы могут быть только публичными
	const GYM = 'Gym'; //тренажерный зал
	const SWIMMING_POOL = 'SwimmingPool';
	const GROUP_TRAINING = 'GroupTraining';
	const MAX = 20; //максимум человек в зоне
	const LOCATION_ERROR = 'Выбранная зона не доступна по Вашему абонементу!'; //промах с зоной
	const EXPIREA_ERROR = 'Срок действия абонемента закончился!';
	const TIME_ERROR = 'Данное время не достпуно по вашему аббонементу!';
	const CLIENT_COUNT_ERROR = 'Места в выбранной зоне нет, ждите!';
	const DOUBLE_PASS_ERROR = 'Ваш абонемент уже зарегистрирован!';
	

}




 ?>