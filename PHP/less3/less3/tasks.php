<?php
echo "tasks";

function getAllTasks(){
	$task1 = [
		'title'=>'Zadacha1',
		'date'=>date_create('yesterday') // date_create вшитая функция
	];
	$task2 = [
		'title'=>'Zadacha2',
		'date'=>date_create('tomorrow')
	];
	$task3 = [
		'title'=>'Zadacha3',
		'date'=>date_create()
	];
	$task4 = [
		'title'=>'Zadacha4',
		'date'=>date_create('yesterday')
	];
	return [$task1, $task2, $task3, $task4];
}


//var_dump(getAllTasks()); // вывод


$new = function ($tasks){
	return $tasks['date'] > date_create();
};

$old = function ($tasks){
	return $tasks['date'] < date_create();
};


$by_title = function ($tasks, $title){
		return tasks['title'] == $title;
};


function get_tasks_by_param($func, $param=null){
	$result_tasks = [];
	$tasks = getAllTasks();
	foreach ($tasks as $value) {
		if ($func($value, $title)){
			array_push($result_tasks, $value);
		}
	}

	return $result_tasks;
}


var_dump(get_tasks_by_param($new));
echo "<br>";
echo "<br>";
echo "<br>";
var_dump(get_tasks_by_param($old));
echo "<br>";
echo "<br>";
echo "<br>";
var_dump(get_tasks_by_param($by_title, 'Zadacha2'));


///////////////////////////////////////

echo "<br>";

function func_name(){
	echo "Informacia";
}

$str = 'func_name';
$str();

//сгенерировать 5 массивов из случайных чисел. Вывести массивы и сумму их элементов на экран.
//найти массив с максимальной суммой элементов. Вывести его на экран еще раз.
//заполнение массива и подсчет суммы - разные функции

echo "<br>";
echo "<br>";


$create_arr = function (){
	$a = rand(5, 15);
	$arr = range($a, 345,$a);
    return $arr;
}

function get_sum($arr){
	return array_sum($arr);
}

function max_arr($arr){
	$arrays = [];
	for ($i =0; $i<=5; $i++){
		array_push($arrays, $arr());
	}
	return $arrays;
}


max_arr($create_arr);













?>