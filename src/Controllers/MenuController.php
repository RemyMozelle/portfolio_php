<?php

namespace Timoz\Controllers;

use Timoz\App;

class MenuController {
  
  public function showMenu (){
    $menu = App::getInstanceMenu()->getMenu();
    include SRC . "Views/includes/header/inc_header.php";
  }

}