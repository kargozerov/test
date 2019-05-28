<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
echo "php function";

//declare(strict_types=1);//строгий режим (типы)
//именованные функиции

//в функиции именованные нельзя переопределить!
//одна функция с одним именем

//объявление именованных функций

/*function имя функции($arg1, &$arg2, $arg='default',...$args){
	тело_функциии;
	return 'возвращаемое значение';
}
*/
//вызов функции
//имя_функции(параметры);

//аргументы, передаваемые по значению
function div($a, $b){
	if (!$b){
		return 'delenie na 0 nevozmozhno';
	}
	return $a/$b;
}
echo "<br>";

var_dump(div(5,0));
echo "<br>";

var_dump(div(5,2));//передаваемые данные копируются в функциию div

//аргументы, передаваемы по ссылки (для того что бы изменить переменную)
echo "<br>";
$str = 'Stroka';

function change_str(&$string){
	$string .=' Posle preobrazovania v function';
}
echo "<br>";
var_dump($str);
echo "<br>";
change_str($str);

var_dump($str); // &$string      & - ссылка поэтому переменная изменилась

//аргументы по умолчанию


function greeting_user($username){
	echo "<h3>Dobro pozhalovat $username<h3>";
}

greeting_user();

greeting_user("Alex");

//переменное количество аргументов

function get_sum(...$nums){ // $nums - массив с параметрами
	return array_sum($nums);
}

var_dump(get_sum(3, 4, 5, 6, 7, 8, 9));
echo "<br>";

var_dump(get_sum(1, 2, 5));

// функции для работы с  аргументами

echo "<br>";
function show_func_args(){
	var_dump(func_get_args());
	var_dump(func_get_arg(1));
	var_dump(func_num_args());
}

show_func_args(23, "str", null, [1,5]);

//тип аргументов, тип возвращаемого значения
//PHP-5  -  тип аргумента: array, имя класса
//PHP-7.0 - тип аргумента: array, имя класса+ скалярные типы,
//PHP-7.0 - тип возвращаемого значения

function sum(int $a, int $b):int
{
	return $a+$b;
}
echo "<br>";
var_dump(sum(false, 4.5)); // 4 т.к. по умолчанию скалярные типы стараются привестись к одному типу данных типо int (false=0, 4.5-4)


echo "<br>";
//static переменная в функциях

function counter(){
	static $counter = 0;
	$counter++;
	return $counter;
}

var_dump(counter());
var_dump(counter());
var_dump(counter());
var_dump(counter());



// область видимости
$some_var = 'peremennay vne function';

const OUT_CONST = 'Constanta vne function';

function some_function(){
	var_dump($some_var);//обращение к меременной вне функции так делать нельзя!!! нужно передовать при помощи переменной
	var_dump(OUT_CONST);// константы находит из глобальной области видимости
}
echo "<br>";
var_dump($some_var);
echo "<br>";
some_function();

//вернуть несколько значений из функции

function rerurn_num_arr(){
	$a = 2;
	$b = 3;
	return [$a, $b];
}

function return_assoc_arr(){
	$a = 2;
	$b = 3;
	return[
		'first'=>$a,
		'second'=>$b
	];
}
echo "<br>";
var_dump(rerurn_num_arr(), return_assoc_arr());



//анонимные функции = функции которые сохраняем в переменные (что бы можно было передать функцию по переменной в другую функцию)
echo "<br>";

$pos_num = function($num){ //это callable тип данных (анонимность в том что нет имени функции)
	return $num > 0;
};

//тип переменной $pos_num - callable
var_dump(is_callable($pos_num));

echo "<br>";
function validate_data($data, $validate_func){
	if ($validate_func($data)){
		echo "Dannue validnu";
	} else {
		echo "Dannue ne proshli";
	}
}

$age = 64;

validate_data($age, $pos_num); // Dannue validnu










?>