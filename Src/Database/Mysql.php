<?php

namespace Timoz\Src\Database;

use \PDO;

class Mysql  {

  private $pdo;

  public function getPdo(){

    try {

      if($this->pdo === NULL) {
        $pdo = new PDO('mysql:dbname=portfolio;host=localhost', 'root', 'root');
        $pdo->exec('SET CHARACTER SET utf8');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        return $this->pdo = $pdo;
      }

      return $this->pdo;

    } catch(PDOException $e) {
      echo 'Connection echoué'. $e;
    }
  }
}