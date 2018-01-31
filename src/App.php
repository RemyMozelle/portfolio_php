<?php

namespace Timoz;

use Timoz\Database\Mysql;
use Timoz\Models\Menu;
use Timoz\Models\Card;
use Timoz\Models\Skill;

class App {

  private static $_db;
  private static $_menu;
  private static $_card;
  private static $_skill;

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