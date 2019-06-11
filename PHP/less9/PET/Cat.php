<?php 
require_once "PetRun.php";
require_once "PetEat.php";
require_once "PetEten.php";

class Cat implements PetRun,PetEat,PetEten
{
	public function run(){
		echo "Передвигается <br>";
	}
	public function eat(PetEat, Mouse){
		echo "Ест кого-то<br>";
	}
	
	public function eaten(PetEten, Dog){
		echo "Съеден";
	}
}


 ?>