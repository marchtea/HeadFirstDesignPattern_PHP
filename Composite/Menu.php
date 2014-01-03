<?php

namespace Composite;
require_once('MenuComponent.php');
require_once('CompositeIterator.php');
require_once('MenuIterator.php');

class Menu extends MenuComponent
{
	private $menuComponents;
	private $name;
	private $description;

	public function __construct($name, $description)
	{
		$this->name = $name;
		$this->description = $description;
		$this->menuComponents = array();
	}

	public function add($menuComponent)
	{
		$this->menuComponents[] = $menuComponent;
	}

	public function remove($menuComponent)
	{
		for($i = 0; $i != count($this->menuComponents); $i++)
		{
			if ($this->menuComponents[$i] == $menuComponent)
			{
				unset($this->menuComponents[$i]);
				break;
			}
		}
	}

	public function getChild($i)
	{
		return $this->menuComponents[$i];
	}

	public function getName()
	{
		return $this->name;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function show()
	{
		print "\n$this->name, $this->description\n";
		print "----------------------\n";

		foreach($this->menuComponents as $menu)
		{
			$menu->show();
		}
	}

	public function isVegetarian()
	{
		return false;
	}

	public function createIterator()
	{
		return new CompositeIterator(new MenuIterator($this->menuComponents));
	}
}
?>
