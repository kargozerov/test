<?php 
session_name("NEW_SESSION_NAME");
session_id(get_random());
session_start();

session_regenerate_id(); //функция формирует заголовки


function get_random(){
	return rand(10,40);
}





//Cookie небольшие наборы данных, с помощью которых можо хранить даннеые на компьютере пользователя (в браузере)

//Данные хранятся в паре: ключ-значение
//можно задавать время хранения данных на компьютере пользователя


//задать Cookie - setcookie(); это порядок для функции в скобках если надо последнее например только пишем вместо тех которые пропустить null
//параметры которые принемает куки
//name - имя cookie
//value - значение cookie
//expire(не обезательный параметр) - время жизни cookie
//path(не обезательный параметр) - путь к катологу на сервере, для которого будут доступны cookie
//domain(не обезательный параметр) - домен, для которого будут доступны cookie
//secure(не обезательный параметр)(значение true || false) - cookie могут передаваться только по HTTPS (парам true)
//httponly(не обезательный параметр)(значение true || false) - cookie не будут доступны JS (true доступны false не доступны)
//для получения cookie используется суперглобальный массив $_COOKIE
//setcookie("key", "value"); //отправляет заголовки на клиет
//var_dump($_COOKIE);//в массиве $_COOKIE будут доступны только после повторного обращения к серверу



if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	if (isset($_POST['token']) && $_POST['token'] ==file_get_contents('token.txt')){
	setcookie('color', $_POST['color'], time()+3600); //3600 - время жизни в милисекундах
	//данные не отправятся на клиент(браузер)
	$_COOKIE['color'] = $_POST['color'];
	}
}
var_dump($_COOKIE);
//$color = isset($_COOKIE['color']) ? $_COOKIE['color'] : "blue"; //Тоже самое что $color = $_COOKIE['color'] ?? "blue";
$color = $_COOKIE['color'] ?? "blue";
//$color = $_COOKIE['color']; //получить из массива цвет который выбрал пользователь 

setcookie('lang[1]',"PHP");
setcookie('lang[2]', "JavaScript");


var_dump($_COOKIE);


if (isset($_COOKIE['lang'])) {
	echo "Выбранные языки<br>";
	foreach ($_COOKIE['lang'] as $key => $value) {
		echo "$key. $value <br>";
	}
}



$token = md5(get_random());
file_put_contents('token.txt', $token);




?>

<body style="background: <?php echo $color ?>">
	<form action="cookie.php" method="post">
		<h6>Изменить цвет фона</h6>
		<select name="color">
			<option value="red">Красный</option>
			<option value="yellow">Желтый</option>
		</select>
		<input type="hidden" value="<?php echo $token ?>"> <!-- hidden - скрытый тип -->
		<input type="submit" value="Изменить цвет">
	</form>
	
</body>
