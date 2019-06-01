<?php 
//подключение php файлов в текущий файл
//если файл не найден, подключение приведет к ошибке
/*require "имя файла";
require_once "имя файла"; 
//если файл не найден, скрипт продолжит работу
include "имя файла";
include_once  "имя файла";
*/

require_once "data.php"; //подключили функцию в файл
$article = getArticle();

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php include_once "heder.php"?>
	<h1>Статья: <?php echo $article['title'] ?></h1>


</body>
</html>