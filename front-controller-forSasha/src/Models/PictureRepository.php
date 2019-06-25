<?php
// require_once __DIR__ . '/../Core/Repository.php';
// require_once __DIR__ . '/../Models/Picture.php';
namespace Max\FrontController\Models;
use Max\FrontController\Core\Repository;
use Max\FrontController\Models\Picture;


class PictureRepository implements Repository
{
    private $pictures = [];
    public function __construct()
    {
        $this->pictures = [
            new Picture(1, 'Picture 1', 'description', ['Chrysanthemum.jpg', 'Lighthouse.jpg']),
            new Picture(2, 'Picture 2', 'description', ['Koala.jpg', 'Hydrangeas.jpg']),
            new Picture(3, 'Picture 3', 'description', ['Tulips.jpg', 'Jellyfish.jpg']),
            new Picture(4, 'Picture 4', 'description', ['Desert.jpg', 'Penguins.jpg']),
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
