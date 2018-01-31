<?php

namespace Timoz\Controllers;

use Timoz\App;

class SkillController {
  
  public function showSkill (){
    $skill = App::getInstanceSkill()->getSkill();
    include SRC . "Views/includes/savoir_faire/inc_savoir_faire.php";
  }
}