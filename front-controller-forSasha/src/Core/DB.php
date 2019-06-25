<?php


namespace  Max\FrontController\Core;

 /**
  *
  */
 class DB
 {
   private $server = 'localhost';
   private $dbName = 'frontcontroller';
   private $username = 'root';
   private $pwd  = '';
   private $connection;
   private static $db;


   private function __construct()
   {
     $this->connection = new \PDO ("mysql:host=$this->server;dbname=$this->dbName", $this->username, $this->pwd, [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]);
   }

   public static function getDB()
   {
     if (self::$db == null) self::$db = new DB();
     return self::$db;
   }

   public function getAll($sql, $class)
   {
     $statement = $this->connection->query($sql);
     if (!$statement) return false;
     $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
     return $statement->fetchAll();
   }

   public function nonSelectQuery($sql, $params)
   {
     $statement = $this->connection->prepare($sql);
     if(!$statement) return false;
     return $statement->execute($params);
   }

   public function paramsGetAll($sql, $params, $class)
   {
     $statement = $this->connection->prepare($sql);
     if(!$statement) return false;
     $statement->execute($params);
     $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
     return $statement->fetchAll();
   }

   public function paramsGetOne($sql, $params, $class)
   {
     $statement = $this->connection->prepare($sql);
     if(!$statement) return false;
     $statement->execute($params);
     $statement->setFetchMode(\PDO::FETCH_CLASS, $class);
     return $statement->fetch();
   }
 }
