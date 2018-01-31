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
$twig = new Twig_Environment($loader, ["cache" => false, "debug" => true]);
$twig->addExtension(new Twig_Extension_Debug());

$menuController = new MenuController();
$cardController = new CardController();
$skillController = new SkillController();

echo $template = $twig->render('index.html.twig', [
  "menus" => $menuController->showMenu(),
  "cards" => $cardController->showCard(),
  "skills" => $skillController->showSkill()
]);

?>