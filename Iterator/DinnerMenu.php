<?php

namespace Iterator;

class DinnerMenu implements Menu
{
	static $MAX_ITEMS = 6;
	private $numberOfItems = 0;
	private $menuItems;
	private $name;

	public function __construct()
	{
		$this->name = "Dinner Menu";
		$this->menuItems = array();

		$this->addItem("Vegetarian BLT",
			"(Fakin') Bacon with lettuce & tomato on whole wheat", true, 2.99);
		$this->addItem("BLT",
			"Bacon with lettuce & tomato on whole wheat", false, 2.99);
		$this->addItem("Soup of the day",
			"Soup of the day, with a side of potato salad", false, 3.29);
		$this->addItem("Hotdog",
			"A hot dog, with saurkraut, relish, onions, topped with cheese",
			false, 3.05);
	}

	public function addItem($name, $description,
							$vegetarian, $price)
	{
		$menuItem = new MenuItem($name, $description, $vegetarian, $price);
		if ($this->numberOfItems >= DinnerMenu::$MAX_ITEMS){
			print "Sorry, menu is full!! Can't add item to menu\n";
		}else{
			$this->menuItems[$this->numberOfItems] = $menuItem;
			$this->numberOfItems = $this->numberOfItems + 1;
		}
	}

	public function getName()
	{
		return $this->name;
	}

	public function createIterator()
	{
		return new MenuIterator($this->menuItems);
	}

	/*
	 *public function getMenuItems()
	 *{
	 *    return $this->menuItems;
	 *}
	 */
}

?>
