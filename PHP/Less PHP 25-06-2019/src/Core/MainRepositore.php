<?php
namespace  Max\FrontController\Core;
use Max\FrontController\Core\Repositore;

/**
 *
 */
class MainRepositore implements Repositore
{

  protected $db;
  private $class;

  function __construct($class)
  {
    $this->db = DB::getDB();
    $this->class = $class;
  }

  public function getAll()
  {
    $sql = 'SELECT * FROM ' . basename(str_replace('\\', '/', $this->class));
    return $this->db->getAll($sql, $this->class);
  }

  public function getById(int $id)
  {
    $sql = 'SELECT * FROM ' . basename(str_replace('\\', '/', $this->class)) . ' WHERE id=:id';
        return $this->db->paramsGetOne($sql, ['id'=>$id], $this->class);
  }
}
