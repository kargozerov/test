<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>_load_form</title>
</head>
<body>
	<form action="form_handler.php" method="post" enctype="multipart/form-data"> <!-- enctype атрибут необходимый при загрузке -->
		<p><input type="text" name="login" placeholder="логин"></p>
		<p><input type="file" name="picture[]" multiple accept="image/*"></p> <!-- multiple будет массив файлов picture[] -->
		<p><input type="submit" value="Отправить"></p>
		
	</form>

</body>
</html>