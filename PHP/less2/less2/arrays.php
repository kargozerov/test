<?php
//massivu
echo "massivu <br>";

//pustoi massiv
$arr = array();
$arr = [];

// numerovanui massive
$arr = [3,6,9,1]; // pod indexami nachinay s 0
echo $arr ;
var_dump($arr ,"<br>");
$arrElem = $arr[2];//9
var_dump($arrElem,"<br>");
$arr[2]=2345;
var_dump($arr,"<br>");

//asociativnui massivu

$arr = [
	'key1' => 'value',
	'key2' => 'value',
	'key3' => 'value',

];

var_dump($arr,"<br>");

$arrElem = $arr['key1']; // poluchaem po kluchu a ne po indexu
var_dump($arrElem);
$arr['key1'] = 'new znachenii';
var_dump($arr,"<br>");

$arr = [3,6,9,1];


foreach ($arr as $value) { // popadaut kopii elementov
	var_dump($value);
}
// nachinua s php 7 mozhno menyr znachenia massiva
//foreach ($arr as &$value) {
//	value +=50;
//}
//var_dump($arr);

//phpinfo();

unset($value);
var_dump($arr);

$a = 6;
$b = $a;
$a = 7;
var_dump($a);
var_dump($b);
echo "<br>";
$c = 6;
$e = &$c; // e - ssulka na c
$c = 7;
var_dump($c);
var_dump($e);

echo "<br>";

$userInfo = [
	'id' => 1,
	'login' => 'qwe',
	'pwd' => 123
];

//perebor asociativnogo massiva
// i kluchi i znachenia
foreach ($userInfo as $key => $value) { // id => 1, login => 'qwe', pwd => 123
	//$key - zapisuvautsy kluchi
	//$value - zapisuvautsy znachenia
	var_dump($key . ' = ' . $value);
}









?>