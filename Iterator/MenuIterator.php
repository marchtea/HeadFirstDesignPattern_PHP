<?php

namespace Iterator;

class MenuIterator implements \Iterator
{
	private $items;
	private $position = 0;

	public function __construct($items)
	{
		$this->items = $items;
	}

	public function current()
	{
		return $this->items[$this->position];
	}

	public function key()
	{
		return $this->items[$this->position];
	}

	public function next()
	{
		$menuItem = $this->items[$this->position];
		$this->position++;
		return $menuItem;
	}

	public function rewind()
	{
		$this->position = 0;
	}

	public function valid()
	{
		return array_key_exists($this->position, $this->items);
	}
}


?>
