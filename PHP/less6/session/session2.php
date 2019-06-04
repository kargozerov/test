<?php 
session_start(); //иннициализация сессии
var_dump($_SESSION); //подсасало данные в массив $_SESSION  из файла  session1.php
$username = $_SESSION['username'];
var_dump($username);



 ?>

 <p><a href="session1.php">Session1</a></p>