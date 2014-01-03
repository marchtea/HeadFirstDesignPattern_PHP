<?php

namespace Iterator;

class Waitress
{
	private $menus;

	public function __construct($menus)
	{
		$this->menus = $menus;
	}

	public function printMenu()
	{
		foreach($this->menus as $menu)
		{
			print $menu->getName()." Menus\n";
			$iterator = $menu->createIterator();
			foreach($iterator as $ite)
			{
				print $ite->getName()."\t".$ite->getPrice()."\n\t".$ite->getDescription()."\n";
			}
			print "\n\n";
		}
	}
}


?>
