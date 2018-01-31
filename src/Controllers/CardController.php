<?php

namespace Timoz\Controllers;

use Timoz\App;

class CardController {
  
  public function showCard (){
    return $card = App::getInstanceCard()->getCard();
  }
}