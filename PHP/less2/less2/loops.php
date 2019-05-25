<?php
//ветвления
echo "hello <br>";

//возраст и пол задача на else if если возраст меньше 16 человек маленький если пол мужской и возраст от 16 до 59 работающий мужчина если больше 59 и пол м то : мужчина на пенсии для женшин от 16 до 54 если после то женщина на пенсии
$age = 60;
$sex = 'wom';

if ($age > 16 && $age <= 65 &&  $sex == 'man'){ 
	echo "$sex work"; 
}elseif ($age > 65  &&  $sex == 'man'){
	echo "$sex pensioner";
}elseif ($age > 16 &&  $age <= 59 &&  $sex == 'wom'){
	echo "$sex work";
}elseif ($age > 59 &&  $sex == 'wom'){
	echo "$sex pensioner";
}else echo "What???????";

echo "<br>";

$min = 345;
switch ($min) {
    case 345:
        echo  "mosk ",4.15*10;
        break;
    case 675:
        echo  "rost ",1.45*10;
        break;
    case 428:
        echo  "krasn ",2.56*10;
        break;
    case 823:
        echo  "sam ",2.11*10;
        break; 
}

//alternativ sintax
echo "<br>";
$i = 1;

switch ($i):
    case 0:
        echo "i ravno 0";
        break;
    case 1:
        echo "i ravno 1";
        break;
    case 2:
        echo "i ravno 2";
        break;
endswitch;





?>