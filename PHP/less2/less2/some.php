<?php
echo "increment (++) � ��������� (--) <br>";
echo "nbgxhjxcf: 
&& and - �,
|| or - ���,
!= - ��,
xor - ����������� ���";


//��������� ����������

$a = 23;
$b = 45;
$c = 12;

$res = ($c > $a && $c < $b) ? "�������� � ����� $a � $b":"�������� � ��� ��������� $a � $b";
var_dump($res);

$a = 45;
$b = 45;

var_dump($a == 45 xor $b == 45);
var_dump($a == 45 xor $b == 56);


$login;
$login = isset($login) ? $login : "default value";
var_dump($login);
//���������� ������ 
//$login = $login ?? "�������� �� ���������";