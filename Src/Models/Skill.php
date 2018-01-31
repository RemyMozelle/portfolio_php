<?php

namespace Timoz\Src\Models;

use \PDO;
use Timoz\Src\Database\Mysql;

class Skill {

  private $db;

  public function __construct (Mysql $db) {
    $this->db = $db;
  }

  public function getSkill(){
    $sql = $this->db->getPdo()->query("
      SELECT id, name, color, mastery FROM skills
    ");
    $res = $sql->fetchAll(PDO::FETCH_OBJ);
    
    return $res;
  }
}