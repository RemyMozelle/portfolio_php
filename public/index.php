<?php

require_once '../vendor/autoload.php';

define('ROOT', dirname(__DIR__));
define('SRC', dirname(__DIR__) . '/src/');
define('IMG', '../assets/');

use Timoz\App;
use Timoz\Controllers\MenuController;
use Timoz\Controllers\CardController;
use Timoz\Controllers\SkillController;

$loader = new Twig_Loader_Filesystem('../src/Views');
$twig = new Twig_Environment($loader, ["cache" => false]);

echo $template = $twig->render('index.html.twig');

/*
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
*/
?>