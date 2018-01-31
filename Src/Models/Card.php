<?php

namespace Timoz\Src\Models;

use \PDO;
use Timoz\Src\Database\Mysql;

class Card {
  
  private $db;

  public function __construct (Mysql $db) {
    $this->db = $db;
  }

  public function getCard(){
    $res = $this->db->getPdo()->query("
      SELECT c.id, c.name, c.url, c.github, c.description,
      GROUP_CONCAT(t.nameTechno) AS technologies,
      GROUP_CONCAT(t.color) AS color
      FROM cards AS c
      INNER JOIN cards_has_technologies AS ct
      ON c.id = ct.cards_id
      INNER JOIN technologies AS t
      ON ct.technologies_id = t.id
      GROUP BY c.id, c.name, c.url, c.github, c.description
      ORDER BY c.id DESC
    ");

    return $res->fetchAll(PDO::FETCH_OBJ);
  }

}