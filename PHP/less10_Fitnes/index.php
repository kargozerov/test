<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once "ClientData.php";
require_once "OneTimePass.php";
require_once "DayTimePass.php";
require_once "ComplexPass.php";
require_once "Fitnes.php";

$clientData = new ClientData("Иван", "Гусев", date_create('12-9-1990'));

$oneTime = new OneTimePass($clientData);

$fitnes = new Fitnes();
$fitnes->addClient($oneTime, FitnesConstants::GYM);

 ?>