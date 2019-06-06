<?php 
session_start();

function logout(){
	//удаляем переменные из сессии
	unset($_SESSION['auth']);
	unset($_SESSION['login']);
	//очищаем массив целиком
	$_SESSION = [];
	//уничтожение сессии
	session_destroy();
	//перенаправляем пользователя на page.php когда 
	//генерация ответа сервера (заголовки отправляются)
	header('Location: page.php');
}

logout();//отработает как только перейдем на эту страницу
























 ?>