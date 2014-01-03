<?php

namespace Iterator;

class PancakeHouseMenu
{
	private $menuItems;
	private $name;

	public function __construct()
	{
		$this->name = "PancakeHouse Menu";	
		$this->menuItems = array();

		$this->addItem("K&B's Pancake Breakfast",
					   "Pancakes with scrambled egges, and toast",
					   true,
					   2.99);
		$this->addItem("Regular Pancake Breakfast",
					   "Pancakes with fried egges, sausage",
					   false,
					   2.99);
		$this->addItem("Blueberry Pancake Breakfast",
					   "Pancakes made with fresh blueberries",
					   true,
					   3.49);
		$this->addItem("Waffles",
					   "Waffles, with your choice of blueberries or strawberries",
					   true,
					   3.59);
	}

	public function addItem($name, $description,
							$vegetarian, $price)
	{
		$menuItem = new MenuItem($name, $description, $vegetarian, $price);
		$this->menuItems[] = $menuItem;
	}

	public function createIterator()
	{
		return new MenuIterator($this->menuItems);
	}

	public function getName()
	{
		return $this->name;
	}

	/*
	 *public function getMenuItems() {
	 *    return $this->menuItems;
	 *}
	 */
}

?>
