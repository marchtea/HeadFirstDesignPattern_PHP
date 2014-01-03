<?php

namespace Composite;

class NullIterator implements \Iterator
{
	public function __construct($ite)
	{
	}

	public function current()
	{
		return null;
	}

	public function key()
	{
	}

	public function next()
	{
	}

	public function rewind()
	{
	}

	public function valid()
	{
		return false;
	}

}
?>
