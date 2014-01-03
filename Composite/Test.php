<?php

namespace Composite;
require_once('Menu.php');
require_once('MenuItem.php');
require_once('Waitress.php');

$pancakeHouseMenu = new Menu("PANCAKE HOUSE MENU", "Breakfast");
$dinerMenu = new Menu("DINER MENU", "Lunch");
$cafeMenu = new Menu("CAFE MENU", "Dinner");
$dessertMenu = new Menu("DESSERT MENU", "Dessert of course!");

$allMenus = new Menu("ALL MENUS", "All menus combined");

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinerMenu);
$allMenus->add($cafeMenu);


$dinerMenu->add(new MenuItem("Vegetarian BLT",
	"(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99));
$dinerMenu->add(new MenuItem("BLT",
	"Bacon with lettuce & tomato on whole wheat", false, 2.99));
$dinerMenu->add(new MenuItem("Soup of the day",
	"Soup of the day, with a side of potato salad", false, 3.29));
$dinerMenu->add(new MenuItem("Hotdog",
	"A hot dog, with saurkraut, relish, onions, topped with cheese",
	false, 3.05));
$dinerMenu->add($dessertMenu);

$dessertMenu->add(new MenuItem("Apple Pie",
	"Apple pie with a flakey crust, topped with vanilla ice cream",
	true, 1.59));

$pancakeHouseMenu->menus = array();

$pancakeHouseMenu->add(new MenuItem("K&B's Pancake Breakfast",
	"Pancakes with scrambled egges, and toast",
	true,
	2.99));
$pancakeHouseMenu->add(new MenuItem("Regular Pancake Breakfast",
	"Pancakes with fried egges, sausage",
	false,
	2.99));
$pancakeHouseMenu->add(new MenuItem("Blueberry Pancake Breakfast",
	"Pancakes made with fresh blueberries",
	true,
	3.49));
$pancakeHouseMenu->add(new MenuItem("Waffles",
	"Waffles, with your choice of blueberries or strawberries",
	true,
	3.59));

$waitress = new Waitress($allMenus);
$waitress->printMenu();
print "----------------------------\n\n\n";
$waitress->printVegetarianMenu();



?>
