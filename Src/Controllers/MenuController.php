<?php

namespace Timoz\Src\Controllers;

use Timoz\Src\App;

class MenuController {
  
  public function showMenu (){
    $menu = App::getInstanceMenu()->getMenu();
    include SRC . "Views/includes/header/inc_header.php";
  }

}