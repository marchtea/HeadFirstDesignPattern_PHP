<?php

namespace Composite;

class Waitress
{
	private $allMenus;//type: MenuComponent

	public function __construct($menus)
	{
		$this->allMenus = $menus;
	}

	public function printMenu()
	{
		$this->allMenus->show();
	}

	public function printVegetarianMenu()
	{
		$iterator = $this->allMenus->createIterator();
		print "\nVEGETERIAN MENU\n-----\n";
		foreach($iterator as $menu)
		{
			if ($menu->isVegetarian())
				$menu->show();
		}
	}
}
?>
