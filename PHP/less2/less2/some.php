<?php
echo "increment (++) и декремент (--) <br>";
echo "nbgxhjxcf: 
&& and - и,
|| or - или,
!= - не,
xor - исключающее или";


//преоритет операторов

$a = 23;
$b = 45;
$c = 12;

$res = ($c > $a && $c < $b) ? "значение с между $a и $b":"значение с вне диапазона $a и $b";
var_dump($res);

$a = 45;
$b = 45;

var_dump($a == 45 xor $b == 45);
var_dump($a == 45 xor $b == 56);


$login;
$login = isset($login) ? $login : "default value";
var_dump($login);
//эквивалент записи 
//$login = $login ?? "значение по умолчанию";