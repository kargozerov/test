<?php

namespace  Max\FrontController\Core;

//здесь перечислены все методы которыми должны обладать классы добавляющие данные в базу
interface Repository
{
    public function getAll(); // получение всех записей
    public function getById(int $id); // получение записи по id
    public function save($data);//метод добавление новой записи
}
