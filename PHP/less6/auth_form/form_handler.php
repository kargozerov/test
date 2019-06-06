<?php 
//варианты ответа сервера
session_start(); //стартуем сессию

//создаем константы
const AUTH_OK = 'OK';
const AUTH_ERROR = 'ERROR';


function check_auth_data($login, $password){
	if (!$login || !$password) return false; // без строчек можно только одну строчку записать
	if (trim($login) != 'qwe' || trim($password) != '123') return false;
	return true; //если все хорошо
}


function answer(){
	$post = $_POST;
	$login = $post['login']; //<p><input class="validate" type="text" name="login" placeholder="логин"></p>
	$password = $post['password']; // <p><input class="validate" type="password" name="password" placeholder="пароль"></p>
	if (!check_auth_data($login, $password)) return AUTH_ERROR; //если функиця не отработало выведет AUTH_ERROR
	$_SESSION['auth'] = true; //в массив _SESSION положили переменную auth с значением true
	$_SESSION['login'] = $login;//в массив _SESSION положили переменную login с значением login
	return AUTH_OK;
}

//функцию answer() нунжно вызывать только тогда когда данные придут методом _POST поэтопу проверяем:

if ($_SERVER['REQUEST_METHOD'] === 'POST'){
	echo answer();
}











 ?>