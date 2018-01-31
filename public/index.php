<?php

define('ROOT', dirname(__DIR__));
define('SRC', dirname(__DIR__) . '/Src/');
define('IMG', '../assets/');

require '../Src/App.php';

use Timoz\Src\App;
use Timoz\Src\Controllers\MenuController;
use Timoz\Src\Controllers\CardController;
use Timoz\Src\Controllers\SkillController;

App::loadAppli();

ob_start();

if(isset($_GET)){
  $menuController = new MenuController();
  $menuController->showMenu();
  $cardController = new CardController();
  $cardController->showCard();
  $skillController = new SkillController();
  $skillController->showSkill();
}

$content = ob_get_clean();

require('../templates/default.php');

?>