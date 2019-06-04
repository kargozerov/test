<?php  
//session_name('ITMO'); // потренеровались заменили имя сессии (имя id и тд медяем до session_start)
session_start(); //иннициализация сессии  (с самого верха вызываем эту функцию)

echo "Сессии";
//сессиид, сохранение данных между последовательными пользовательскими запросами
//суперглобальный массив $_SESSION

//для того чтобы сохранить данные в одном месте и воспользоваться в другом (между пользовательскими запросами)


//$_SESSION - хранит данные между последовательными запросами

//записываем данные сессии
$_SESSION['auth'] = true;
$_SESSION['username'] = 'qwe';

var_dump($_SESSION);

//проверка наличия переменной в массиве
var_dump(isset($_SESSION['username'])); // true (isset - проверяет наличие переменной)

//удаление данных (когда пользователь выходит)
unset($_SESSION['username']);
$_SESSION = [];
 
//закрытие сессии
session_destroy();
var_dump($_SESSION); //  empty

var_dump(session_name()); // имя сессии
var_dump(session_id()); // id сессии
var_dump(session_save_path()); //имя каталога с сессиями
/*
var_dump(session_name(имя)); //задать имя сессии
var_dump(session_id(id)); //задать id сессии
var_dump(session_save_path(каталог)); //задать имя каталога с сессиями*/
//session_regenerate_id(); // регенирация id




?>
<p><a href="session2.php">Session2</a></p>


















