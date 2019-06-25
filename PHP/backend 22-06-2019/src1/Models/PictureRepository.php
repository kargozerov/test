<?php
require_once __DIR__ . '/../Core/Repository.php';
require_once __DIR__ . '/../Models/Picture.php';


class PictureRepository implements Repository
{
    private $pictures = [];
    public function __construct()
    {
        $this->pictures = [
            new Picture(1, 'Picture 1', 'description', ['pic1.jpg', 'pic1.jpg']),
            new Picture(2, 'Picture 2', 'description', ['pic1.jpg', 'pic1.jpg']),
            new Picture(3, 'Picture 3', 'description', ['pic1.jpg', 'pic1.jpg']),
            new Picture(4, 'Picture 4', 'description', ['pic1.jpg', 'pic1.jpg']),

        ];
    }

    public function getAll()
    {
        // возвращает все картины
        return $this->pictures;
    }

    public function getById(int $id)
    {
        foreach ($this->pictures as $picture){
            if ($id == $picture->getId()){
                return $picture;
            }
        }
    }

}