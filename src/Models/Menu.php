<?php

namespace Timoz\Models;

use \PDO;
use Timoz\Database\Mysql;

class Menu {

  private $db;

  public function __construct (Mysql $db) {
    $this->db = $db;
  }

  public function getMenu(){
    $sql = $this->db->getPdo()->query("
      SELECT id, name, url
      FROM menus
    ");
    $res = $sql->fetchAll(PDO::FETCH_OBJ);
    
    return $res;
  }
}


//SELECT name, url FROM menus