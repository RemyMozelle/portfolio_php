<?php

namespace Timoz\Controllers;

use Timoz\App;

class MenuController {
  
  public function showMenu (){
    return $menu = App::getInstanceMenu()->getMenu();
  }

}