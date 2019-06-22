<?php 

namespace User1\FrontController\Core;

use namespace User1\FrontController\Core\Repository;


class MainRepository implements Repository
{
	//методы на
	//добавлени записи
	//получение записи по первичному ключу
	//получение всех записей
	//(общее для всех  репозиториев)
	protected $db;
	private $class;

	public function __construct($class){
		$this->db = DB::getDB();
		$this->class = $class;
	}

	public function getAll()
	{
		// $class соответтсвует таблице в бд
		//например, Picture
		// User1\FrontController\Core\Picture - из этого нужно получить только  Picture
		//берем последенне слово по разделителям
		$sql = 'SELECT * FROM ' . basename(str_replace('\\', '/', $this->class));
		return $this->db->getAll($sql, $this->class);
	}

	public function getById(int $id){
		$sql = 'SELECT * FROM ' . basename(str_replace('\\', '/', $this->class)) . ' WHERE id=:id';
		return $this->db->paramsGetOne($sql, ['id'=>$id], $this->class);

	}
}








 ?>