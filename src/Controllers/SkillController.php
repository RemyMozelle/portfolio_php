<?php

namespace Timoz\Controllers;

use Timoz\App;

class SkillController {
  
  public function showSkill (){
    return $skill = App::getInstanceSkill()->getSkill();
  }
}