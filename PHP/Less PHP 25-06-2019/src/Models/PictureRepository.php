<?php
// require_once __DIR__ . '/../Core/Repository.php';
// require_once __DIR__ . '/../Models/Picture.php';
namespace Max\FrontController\Models;
use Max\FrontController\Core\Repository;
use Max\FrontController\Models\Picture;
use Max\FrontController\Core\DB;


class PictureRepository implements Repository
{
    //private $pictures = [];

    private $db;
    public function __construct()
    {
       /* $this->pictures = [
            new Picture(1, 'Picture 1', 'description', ['Chrysanthemum.jpg', 'Lighthouse.jpg']),
            new Picture(2, 'Picture 2', 'description', ['Koala.jpg', 'Hydrangeas.jpg']),
            new Picture(3, 'Picture 3', 'description', ['Tulips.jpg', 'Jellyfish.jpg']),
            new Picture(4, 'Picture 4', 'description', ['Desert.jpg', 'Penguins.jpg']),
        ];*/
        $this->db = DB::getDB();
    }

    public function getAll()
    {
   /*     // возвращает все картины
        return $this->pictures;*/
        //1.Составить sql запрос
        $sql = 'SELECT * FROM Picture';
        return $this->db->getAll($sql); //возвращает все картины
        //2.Получить все записи из базы
    }

    public function getById(int $id)
    {
        /*foreach ($this->pictures as $picture){
            if ($id == $picture->getId()){
                return $picture;
            }
        }*/
        //получаем по id
        $sql = 'SELECT * FROM Picture WHERE id=:id';
        $params = ['id'=>$id];
        return $this->db->paramsGetOne($sql, $params);
    }

    public function save($params){ //сюда придет массив $params из PictureController

        $creatSql = 'CREATE TABLE IF NOT EXISTS `epsilon`.`Picture` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(150) NOT NULL,
  `description` MEDIUMTEXT NOT NULL,
  `img` VARCHAR(255) NOT NULL,
  `yearCreated` YEAR NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB';
        $this->db->create($creatSql);

        $sql = 'INSERT INTO Picture (title, description, img, yearCreated)
        VALUES (:title, :description,:img, :yearCreated)';
        return $this->db->nonSelectQuery($sql, $params);
    }

}



