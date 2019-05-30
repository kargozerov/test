<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form</title>
</head>
<body>
<p id="errors"></p>
<form name="someForm" method="post" action="form_handler.php">
    <p><input class="validate" type="text" placeholder="login" name="login"></p>
    <p><input class="validate" type="password" placeholder="password" name="password"></p>
    <p><label>Одиночный чекбокс<input type="checkbox" name="single"></label></p>
    <p>Группа чекбоксов</p>
    <p><label>Синий<input value="blue" type="checkbox" name="color[]"></label></p>
    <p><label>Красный<input value="red"  type="checkbox" name="color[]"></label></p>
    <p><label>Зеленый<input value="green" type="checkbox" name="color[]"></label></p>
    <select name="country">
        <option value="1">Россия</option>
        <option value="2">Бельгия</option>
    </select>
    <p><input type="submit" value="Отправить"></p>
</form>

<script src="form.js"></script>

</body>
</html>