<?php 
require_once "PetRun.php";
require_once "PetEat.php";

class Dog implements PetRun,PetEat 
{
	public function run(){
		echo "Передвигается <br>";
	}
	public function eat(){
		echo "Ест кого-то<br>";
	}
	
}



 ?>