<?php 

class Article
{
		private $title;
		private $text;
		private $date ;// date_create(); 
		private $author; //объект класса User

		//конструктор класса вызывается автоматически при создании объекта
		function __construct()
		{
			$this->date = date_create();

		}


		// СЕТТЕРЫ
public function setTitle($title){
		if(!is_string($title)){return false;}
			if (strlen($title)<5){ 
			echo "Значение свойства должно быть больше 5<br>";
			return;
		}
		$this->title = $title; 
	}

	public function setText($text){
		if(!is_string($text)){return false;}
			if (strlen($text)<20){ 
			echo "Значение свойства должно быть больше 20<br>";
			return;
		}
		$this->text = $text; 
	}

	public function setDate(DateTime $date){
		
		$this->date = $date; 
	}

	public function setAuthor(User $author){
		
		$this->author = $author; 
	}

		//ГЕТТЕРЫ

	public function getTitle(){
		return $this->title;
	}

	public function getText(){
		return $this->text;
	}

	public function getDate(){
		return $this->date;
	}

	public function getAuthor(){
		return $this->author;
	}


}


 ?>