<?php 
class Utils {
	//статические методы и свойства класса принадлежат классу а не объекту что  обратичтся к статическим свойства и методам не нужно создавать обхъект
	private $someProp;
	public static $staticProp;


	public static function sum($a, $b){
		//Статические методы не имеют $this
		//$someProp - из статического метода нельзя обращаться к нестатическим свойствам и методам
		var_dump(self::$staticProp);
		return $a+$b;
	}

}


 ?>