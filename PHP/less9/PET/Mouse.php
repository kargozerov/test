<?php 
require_once "PetRun.php";
require_once "PetEten.php";


class Cat implements PetRun, PetEten
{
	public function run(){
		echo "Передвигается <br>";
	}
		
	public function eaten(){
		echo "Съеден";
	}
}



 ?>