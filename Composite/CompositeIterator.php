<?php

namespace Composite;

class CompositeIterator implements \Iterator
{
	private $stack;
	private $begin;
	public function __construct($ite)
	{
		$this->stack = array();
		$this->stack[] = $ite;
		$this->begin = $ite;
	}

	public function current()
	{
		$ite = $this->stack[count($this->stack)-1];
		return $ite->current();
	}

	public function key()
	{
		$ite = $this->stack[count($this->stack)-1];
		return $ite->current();
	}

	public function next()
	{
		$ite = $this->stack[count($this->stack)-1];
		$component = $ite->current();
		if ($component instanceof Menu){
			array_push($this->stack, $component->createIterator());
		}
		$ite->next();
	}

	public function rewind()
	{
		unset($this->stack);
		$this->stack = array($this->begin);
	}

	public function valid()
	{
		if (count($this->stack) == 0)
			return false;
		else{
			$ite = $this->stack[count($this->stack)-1];
			if ($ite->valid())
			{
				return true;
			}else{
				array_pop($this->stack);
				return $this->valid();
			}
		}
	}
}
?>
