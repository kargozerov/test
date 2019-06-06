<?php 
session_start();
if(!isset($_SESSION['auth'])){ //если пользователь не авторизован то идете на страницу page.php
	//функция перенаправления
	header('Location: page.php');
}

$login = $_SESSION['login']; //если авторизован то получит меню

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Аккаунт пользователя</title>
</head>
<body>
	<nav>
 		<ul>
 			<li><a href="#">Страница 1</a></li>
 			<li><a href="#">Страница 2</a></li>
 			<li><a href="logout.php">Выйти</a></li>
 		</ul>
 	</nav>


 	<h2><?php echo $login; ?>, здесь Ваш личный кабинет!</h2>


	
</body>
</html>