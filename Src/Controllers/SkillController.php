<?php

namespace Timoz\Src\Controllers;

use Timoz\Src\App;

class SkillController {
  
  public function showSkill (){
    $skill = App::getInstanceSkill()->getSkill();
    include SRC . "Views/includes/savoir_faire/inc_savoir_faire.php";
  }
}