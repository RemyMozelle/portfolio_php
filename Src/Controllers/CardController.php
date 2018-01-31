<?php

namespace Timoz\Src\Controllers;

use Timoz\Src\App;

class CardController {
  
  public function showCard (){
    $card = App::getInstanceCard()->getCard();
    include SRC . "Views/includes/portfolio/inc_portfolio.php";
  }
}