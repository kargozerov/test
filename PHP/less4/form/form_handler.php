<?php 
$post = $_POST;
/*var_dump($post);*/

$login = $post['login'];
if ($login){
	echo "Логин введен ";
}else echo "Логин не введен ";

/*echo "<br>";*/

$password = $post['password'];
if ($password){
	echo "Пароль введен ";
}else echo "Пароль не введен ";

/*echo "<br>";*/

$country = $post['country'];

switch ($country ) {
	case $country == 1:
		echo "Россия";
		break;
	
	case $country == 2:
		echo "Бельгия";
		break;
}




/*$login = $post['login'];
echo "Пользователь: $login";*/

 ?>