<?php

namespace Timoz\Core;

class Autoloader {

  public static function autoload(){
    spl_autoload_register(function($class) {

      $namespace = str_replace('Timoz\\', '/', $class);
      $finish = str_replace('\\', '/', $namespace);
      require dirname(__DIR__) . $finish . '.php';
    });
  }

}
