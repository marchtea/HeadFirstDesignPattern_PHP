<?php

namespace Composite;
require_once('Exception.php');

abstract class MenuComponent
{
	public function add($menuComponent)
	{
		throw new UnsupportOperationException();
	}
	public function remove($menuComponent)
	{
		throw new UnsupportOperationException();
	}
	public function getChild($i)
	{
		throw new UnsupportOperationException();
	}
	public function getName()
	{
		throw new UnsupportOperationException();
	}
	public function getDescription()
	{
		throw new UnsupportOperationException();
	}
	public function getPrice()
	{
		throw new UnsupportOperationException();
	}
	public function isVegetarian()
	{
		throw new UnsupportOperationException();
	}
	public function show()
	{
		throw new UnsupportOperationException();
	}
	public function createIterator()
	{
		throw new UnsupportOperationException();
	}
}
?>
