<?php 
var_dump(realpath("some_dir/file1.txt")); // полный путь /var/www/html/less5/file_system/some_dir/file1.txt

var_dump(getcwd()); // текущая директория /var/www/html/less5/file_system

/*chdir(ипя_папки);переход в другую директорию
*/

//копирование
if (copy('some_dir/file1.txt', 'some_dir/file2.txt')) { //(файл_из_которого_копируем, файл_в_который_копируем) -- если файла в ктоторый копируем не будет функция его создаст
	echo "Копирование завершено <br>";
}else {
	echo "неудача не скопировать";
}

echo "<br>";
//переименование

if (rename('some_dir/file3.txt', 'some_dir/new_file1.txt')) {
	echo "файл переименован <br>";
}else {
	echo "неудача не переименовано";
}

echo "<br>";
//удаление файлов
if (unlink('some_dir/new_file2.txt')) {
	echo "Удалили";
}else{
	echo "неудача никак не удалить";
}


//создать папку (директорию)
/*mkdir("new_dir");
// удаление директории
rmdir("new_dir");*/

function read_dir($dirname{
	if (if_dir($dirname)){  // if_dir - проверяет папка или нет(дирекория)
		if ($dh = opendir($dirname)){ // $dh - дистрипкор ресурсов открываем
			while (($file = readdir($dh)) !==false) { // readdir открыли на чтение
				echo 'file: ' . $file . ' type: ' . filetype($dirname . '/' .$file);
			}
		}closedir($dh); //закрывает
	}
}
read_dir("some_dir");


//чтение из файла
function read_file_fread($filename){
	$fp = fopen($filename, 'r'); //fp - канал связи
	$contents = fread($fp, filesize($filename)); // filesize($filename) - размер файла
	fclose($fp);
	return $contents;

}
$filename = 'some_dir/file1';
echo read_file_fread($filename);










 ?>