<?php 
require_once "User.php"; //подключили файл User.php
require_once "Article.php";


//объекты создаются только на основе созданных классов!!!


//на основе заранее созданных классов при помощи ключевого слова new создаются объекты

//создадим объект класса User
$qwe = new User();
//создадим еще один объект класса User
$asd = new User();

//доступ к доступным свойствам и методам осуществляется через -> имя_объекта -> имя_свойства

//доступ к приватным свойствам только внутри класса
//$qwe->name; --- так нельзя получить доступ


//задаем СЕТТЕР


$qwe->setName('Mike'); //this - qwe
var_dump($qwe);

$asd->setName('Alx'); //this - asd должна быть ошибка
var_dump($asd);


//получим значение свойства $name у объектов 
//доступ к приватным совйствам только внутри класса
//var_dump($asd->name); --- так нельзя получить доступ


// вызывыаем ГЕТТЕР

var_dump($qwe->getName()); // 'Mike' 
var_dump($asd->getName()); // null т.к имя меньше 4


$qwe->setLogin('LOGIN'); //this - qwe
var_dump($qwe);

$asd->setLogin('A'); //this - asd должна быть ошибка
var_dump($asd);



var_dump($qwe->getLogin());
var_dump($asd->getLogin());


/////////////////////////////////// Article
$article1 = new Article();
$article2 = new Article();

$article1->setTitle('СТАТЬЯ 1'); 
$article1->setText('Статья — это жанр журналистики, в котором автор ставит задачу проанализировать общественные ситуации, процессы, явления, прежде всего с точки зрения закономерностей, лежащих в их основе.'); 
//$article1->setDate(); 
var_dump($article1->getAuthor()->getLogin());
var_dump($article1);

$article2->setTitle('СТАТЬЯ 2'); 
$article2->setText('Статья 2— это жанр журналистики, в котором автор ставит задачу проанализировать общественные ситуации, процессы, явления, прежде всего с точки зрения закономерностей, лежащих в их основе.'); 

//$article2->setDate(); 
var_dump($article2->getAuthor()->getLogin());
var_dump($article2);








$qwe->addArticle($article1);
var_dump($qwe);

$qwe->addArticle($article2);
var_dump($qwe);






































 ?>