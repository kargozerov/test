<?php
//Операторы
echo "Арифметические опреаторы";
//+ - / *
// % остаток от деления
//** степень
// . оператор точка (конкатенация строк - склейка строк)

$bool = false;
$int = 44;
$string = 'Строка';
$int_in_str = '2';

echo "44 / на 2, 5, 0";
var_dump($int/2);
var_dump($int/5);
var_dump($int/0);

echo "44 /*-+ '2'"; // строка пытается преобразоваться к числу
var_dump($int / $int_in_str);
var_dump($int * $int_in_str);
var_dump($int - $int_in_str);
var_dump($int + $int_in_str);


//болевый тип

echo "44 /*-+ bool"; // строка пытается преобразоваться к числу
var_dump($int / $bool);
var_dump($int * $bool); //false = 0 (0*0=0)
var_dump($int - $bool);
var_dump($int + $bool);

echo "44 -+ string";
var_dump($int + $string);
var_dump($int - $string);
echo "конкатинация";
var_dump($int . $string);//конкатинация 44Строка


echo "возведение в степень";
var_dump($int**2);
var_dump(44**2); //44^2

echo "операторы сравнения возвращают true или false";
// > < >= <= != == ===
var_dump($int > 90);
var_dump($int == '44');
var_dump($int === 44);
var_dump($int === '44');

// <=> начиная с 7.0 КОСМИЧЕСКИЙ КОРАБЛЬ

echo "КОСМИЧЕСКИЙ КОРАБЛЬ 0 -1 1";
var_dump($int <=> 44); // равны значит 0
var_dump($int <=> 90);// 44 меньше 90 значит -1 (левое меньше правого)
var_dump($int <=> 13);// 44 больше 13 значит 1 (левое больше правого)


echo "операторы присваивания = += *= /= %= .=<br>";
$login = 'qwe';
$login .= '3';
var_dump($login); // qwe3 приклеили 3 к qwe


echo "инкремент (++) декремент(--)<br>";

//функции округления чисел: round() ceil() floor()


?>
