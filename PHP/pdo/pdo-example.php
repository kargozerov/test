<?php 
//PDO класс для соедениения с базой данных

//база_данных pdo

//таблица Book
//id
//title
//pageCount

//создаем бд и талицу
/*create database pdo;
use pdo;
create table book (
id int primary key auto_increment not null,
title text not null,
pageCount int not null
);
show tables;
*/
//добавим записи в таблицу
/*insert into book (title, pageCount) values ('Azbuka' , 100);
insert into book (title, pageCount) values ('Skazki' , 700);
*/

//данные, необходимые для соединения с БД
$server = '192.168.42.32'; //адрес сервера
$dbName = 'pdo'; //имя бд
$username = 'user2'; // имя пользователя бд
$pwd = '123' // пароль пользователя бд

//дополнительные опции соединения (использовать не обезательно)
$options = [
PDO::ATTR_ERRMODE=> PDO::ERRMODE_EXCEPTION, //обращаемся к константе(ключ=>значение) ( ОТОБРАЖАЕТ ОШИБКИ)
 //PDO::ATTR_PERSISTENT=> true // держать соединение открытым
];

//создание объекта PDO - соединение с БД
$connection = new PDO("mysql:host=$server;dbname=$dbName",$username,$pwd,$options); //конструктор PDO (mysql:host=$server(это майскл типо)=адрес_сервера;имя_базы,имя_пользователя,пароль,опции)

var_dump($connection);


$sql = 'SELECT * FROM book'; //выполняем запрос получаем данные

//неподготовленные данные
//query(строка_запроса) - вернет объект PDOStatement
$statement = $connection->query($sql);
//получаем данные
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
//PDO::FETCH_ASSOC - данные вида [[key=>value],[key=>value]]
var_dump($data);

//подготовленные запросы (именованные параметры)
//нужно: массив с параметрами и сама строка запроса
//использовать когда в строку запроса передаются данные от клиента (пользователя)
$sql = 'SELECT * FROM book WHERE id=:fgfgfgfg'; //=: - используем именованые запросы
$id = 2;
$params = [
	'fgfgfgfg'=>$id
];
//метода prepapre вернет объект PDOStatement
//
$statement = $connection->prepare($sql); //возвратит объект $statement = PDOStatement у которого вызываем метод execute
//выполняем запрос
$statement->execute($params); //execute принимает только массив
//получение данных
$data = $statement->fethc(PDO::FETCH_ASSOC);
var_dump($data);

//передадим несколько параметров

$sql = 'INSERT INTO book (title, pageCount) VALUES (:booktitle, :bookpageCount)';
//данные пришли типо из формы
$title = 'Колобок';
$pageCount = 70;
//booktitle и bookpageCount - имена параметров должны соответсвовать ключам в массиве с параметрами
$params = [
	'booktitle'=>$title,
	'bookpageCount'=>$pageCount
];



$statement = $connection->prepare($sql);
//всегда проверяем что данные добавлены!!!!!!
if ($statement->execute($params)){
	echo "Данные успешно добавлены <br>";
}

//обновление записи с id = 3 (новое название и pageCount)


//подготовленные запросы (неименованные параметры)

$sql = 'SELECT * FROM book WHERE title=? AND id=?';
$id = 1;
$title = 'Азбука';
//порядок элементов в массиве с параметрами имеет значение:
//на место первого ? подставиться элемент масиива с индектом 0
// на место второго ? подставится элемент масиива с индексом 1 и т.д.
$params = [
	$title, // в тоже порядке что и в WHERE title=? AND id=? (тайтл потом айд)
	$id
];

$statement = $connection->prepare($sql);
$statement->execute($params);
$data = $statement->fethc(PDO::FETCH_ASSOC);
var_dump($data);


//методы query, возвращают false в случае ошибки
$connection->beginTransaction();
//запрос 1
//запрос 2
//и тд
$connection->rollBach(); // - в случае ошибки, откат транзакции не будет выполнен не один запрос
$connection->commit(); //выполнение (фиксация) всех запросов в БД




















 ?>