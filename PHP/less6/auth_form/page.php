<?php 
session_start();
$auth = $_SESSION['auth'];
 ?>


 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>PAGE</title>
 	<link rel="stylesheet" href="css/style.css">
 </head>
 <body>
 	<h1>Авторизация</h1>

 	<nav>
 		<ul>
 			<li><a href="#">Страница 1</a></li>
 			<li><a href="#">Страница 2</a></li>
 			<li>
 				<?php if($auth): ?>
					<a href="logout.php">Выйти</a>
 					<?php else: ?>
					<a href="open_modal">Войти</a>
 					<?php endif; ?>
 			</li>
 		</ul>
 	</nav>

 	<!-- модальное окно -->
 	<div id="modal">
 		<p id='errors'></p>
 		<form name="auth_form" action="form_handler.php" method="post">
 			<p><input class="validate" type="text" name="login" placeholder="логин"></p>
 			<p><input class="validate" type="password" name="password" placeholder="пароль"></p>
 			<p><input type="submit" value="Отправить"></p>
 			<p><input id="cansel" type="button" value="Отмена"></p>
 		</form>
 	</div>

 	<h3>Страница доступна всем пользователям</h3>

 	<?php if(!$auth): ?> <!-- если пользователь не авторизован то подключаем js -->
 		<script src="js/script.js"></script>
 	<?php endif; ?>
 	
 </body>
 </html>