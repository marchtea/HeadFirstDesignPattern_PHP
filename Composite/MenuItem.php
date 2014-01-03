<?php

namespace Composite;
require_once('MenuComponent.php');
require_once('NullIterator.php');

class MenuItem extends MenuComponent
{
	private $name;
	private $description;
	private $vegetarian;
	private $price;

	public function __construct($name, $description,
								$vegetarian, $price)
	{
		$this->name = $name;
		$this->description = $description;
		$this->vegetarian = $vegetarian;
		$this->price = $price;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getDescription()
	{
		return $this->description;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function isVegetarian()
	{
		return $this->vegetarian;
	}

	public function show()
	{
		print "  $this->name";
		if ($this->vegetarian)
			print "(v)";
		print ", $this->price\n";
		print "    -- $this->description\n";
	}

	public function createIterator()
	{
		return new NullIterator();
	}
}
?>
