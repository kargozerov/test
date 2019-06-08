<?php 
//declare(strict_types=1); //жесткий вариант типизация данных (строгий режим)
//когда нужно объявить класс 
class User // класс с большой буквы (никаких нижних подчеркиваний и пробелов в названии)
{ 
	//описание класса
	// что можно описать в классе:
	// свойства, которыми будут обладать объекты класса User (характеристики будущих объектов)
	//свойства -  это переменны объявленные внутри класа
	//модификаторы доступа (для того что бы объявить переменную нужен)
	//private - name (доступен только внутри класса)
	private $name;
	private $login = null; //пока нет логина
	private $articles = [];
	//модифатор доступа public означает, что свойсто или метод достпуны везде
	//создали метод setName
	//метод - функция объявленная внутри класса метода
	//СЕТТЕР
	public function setName($name){ //string - преобразуем к строке (к типу данных строка)---(если в строгом режиме то будет проверка на тип данных строка если не строка то все отвалистя)
		//если версия PHP не поддерживает declare(strict_types=1)
		if(!is_string($name)){return false;}
		//установка свойства через метод (СЕТТЕР)
		//нужна для того что бы проверять входящие данные и обезапасить данные свойства
		if (strlen($name)<4){ //проверили длину $name
			echo "Значение свойства должно быть больше 4<br>";
			return;
		}
		//$this -- ссылка на текущий объект (qwe из object.php)
		$this->name = $name; //для того что бы разные объекты соображали что нужно менять name

	}
	//что бы вернуть значения объекта (ГЕТТЕР)
	public function getName(){
		return $this->name;
	}

     //СЕТТЕРЫ для login
	public function setLogin($login){
		if(!is_string($login)){return false;}
		if (strlen($login)<2){ //проверили длину $login
			echo "Значение свойства должно быть больше 2<br>";
			return;
		}

		$this->login = $login;
	}
	// ГЕТТЕРЫ для login
	public function getLogin(){
		return $this->login;
	}

}
//объекты без класса создать нельзя -  классы - шаблоны объекта

//articles
public function addArticle(Article $article){ //объекты из класса Article
	array_push($this->articles, $article);
}


public function getArticles(){

	return $this->articles;

}





 ?>