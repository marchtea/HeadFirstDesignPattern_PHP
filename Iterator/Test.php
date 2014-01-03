<?php

namespace Iterator;

require_once('MenuItem.php');
require_once('Menu.php');
require_once('MenuIterator.php');
require_once('DinnerMenu.php');
require_once('PancakeHouseMenu.php');
require_once('Waitress.php');

$dinnermenu = new DinnerMenu();
$pancakemenu = new PancakeHouseMenu();
$waitress =new Waitress(array($dinnermenu, $pancakemenu));
$waitress->printMenu();


?>
