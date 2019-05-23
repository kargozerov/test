<?php
// испльзуется для отображения данных в html
// выводимые данные преобразует к строке
echo "Выводимая инфа";

//функция отладки как console.log()
var_dump(123);

echo "Переменные";
//объявление переменных
$login = 'qwe';//создали переменную логин и присвоили значение qwe
var_dump($login);//вывели

//переопределение значений переменных
$login = 'asd';
var_dump($login);

//empty(переменные)  \ isset (переменные)

var_dump('empty',empty($login));//false
var_dump('isset',isset($login));//true

$pdw;
var_dump('empty',empty($pdw));//true
var_dump('isset',isset($pdw));//false

$auth = false;
var_dump('empty',empty($auth));//true
var_dump('isset',isset($auth));//true

$auth = null;//нет значения так же как нет переменной
var_dump('empty',empty($auth)); //true
var_dump('isset',isset($auth)); //false


$auth = '';//нет значения так же как нет переменной
var_dump('empty',empty($auth)); //true
var_dump('isset',isset($auth));//true

//empty() проверяется является ли переменная пустой если значение false вывод true
//(переменная не существует если значеме равно false)
//isset() определяет установлено ли значение переменной если значений нет false

//языковая конструкция date_sunset
unset($login); //уничтожает переменную
var_dump($login); //null

//Типы данных
//Скалярные типы данных (простые)

echo "Тип Boolean";
//выражает истинность, принимает значения true или false

$activ = true; //переменная булевого типа
$connect = false;

//при приведении к типу Boolean, к false преабразуется:
// 0 / -0 / 0.0 / -0.0 / '' / пустой_массив / null

// $a = 0;
// if($a){}; // false

//при приведении к типу Boolean (bool) (boolean) перед переменной
$login = (bool) $login; //т.к. тут был null
var_dump($login);//false (стало значение false)

//проверка на boolean
var_dump(is_bool($login)); // true т.к.тип булеан

echo "Тип Integer";
// целые числа
var_dump(PHP_INT_MAX); //константы
var_dump(PHP_INT_MIN); //константы
var_dump(PHP_INT_SIZE); //константы

//при приведении к типу Integer (int) (integer) перед переменной

$login = (int) $login;
var_dump($login); // 0 т.к. было false
//false = 0
//все остальное (любое число) = 1


//проверка на integer is_int()
var_dump(is_int($login)); //  true т.к.тип int

// var_dump((4.0/0)); // float безконечность
//числа с плаваюей точкой
echo "Тип Float / Double / Real";
//числа с плаваюей точкой
var_dump(PHP_FLOAT_MAX);// php 7.2 надо на сервере что бы отобразить
var_dump(PHP_FLOAT_MIN);// php 7.2 надо на сервере что бы отобразить

//преобразование к числу с плавющей точкой (double),(float),(real) это все одно и тоже

$login = (float) $login;
var_dump($login); // float 0
//проверка  на тип float is_float()
var_dump(is_float($login)); // boolean true

echo "Тип String";
//строка - (набор символов) это массив байт
$first_string = 'Строка отображает все, как текст: \n и $login';
$second_string = "Строка в двойных кавычках распознает специальные символы  \n
и обрабатывает переменные $login";

var_dump($first_string);
var_dump($second_string);

//преведение к строке (string) перед переменной

$login = (string) $login;
var_dump($login); // string '0'

//проверка на строку
var_dump(is_string($login));//boolean true
///////////!!!!!!!!!!!!!непользоватся gettype!!!!!!!!!!!!///////////
var_dump(gettype($login)); //string 'string' вернет строку с типом данных (только для просмотра)
///////////!!!!!!!!!!!!непользоватся gettype!!!!!!!!!!!!///////////

//создать три переменные возраст, имя, фамилия,
// вывод на экран: Студен: имя фамилия, возраст, лет

$age = '28';
$name = 'Александр';
$name2 = 'Каргозеров';

echo "Студен: $name $name2, $age лет.";

//смешанные типы
// на следующем уроке

echo "Константы";
//значенияе констант нельзя изменить
//имена с большой буквы

define ('STATUS_OK','OK'); // (название_переменной, значение)первый способ объвления констаны

define ('STATUS_OK1',55); // int 55
// const STATUS_ERROR; нельзя не присваивать!!!
const STATUS_ERROR = 'Error';

var_dump(STATUS_ERROR); // 'Error'
var_dump(STATUS_OK);// 'OK'
var_dump(STATUS_OK1);// 'OK'
var_dump(get_defined_constants());//все константы PHP


//с версии 5.6 возможно задать константу массивом, используя constant
//с версии 7 можно задать константу массивом,используя define


















?>
