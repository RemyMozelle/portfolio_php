<?php

namespace Timoz\Src;

use Timoz\Core\Autoloader;
use Timoz\Src\Database\Mysql;
use Timoz\Src\Models\Menu;
use Timoz\Src\Models\Card;
use Timoz\Src\Models\Skill;

class App {

  private static $_db;
  private static $_menu;
  private static $_card;
  private static $_skill;

  public static function loadAppli() {
    require '../core/Autoloader.php';
    Autoloader::autoload();
  }

  public static function getInstanceDb() {
    if(static::$_db === NULL) {
      static::$_db = new Mysql();
    }
    return static::$_db;
  }

  public static function getInstanceMenu (){
    return new Menu(static::getInstanceDb());
  }

  public static function getInstanceCard (){
    return new Card(static::getInstanceDb());
  }

  public static function getInstanceSkill (){
    return new Skill(static::getInstanceDb());
  }
}