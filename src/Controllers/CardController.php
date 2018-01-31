<?php

namespace Timoz\Controllers;

use Timoz\App;

class CardController {
  
  public function showCard (){
    $card = App::getInstanceCard()->getCard();
    include SRC . "Views/includes/portfolio/inc_portfolio.php";
  }
}