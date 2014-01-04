<?php

namespace State;

class NoQuarterState implements State
{
	private $gumballMachine;

	public function __construct($gumballMachine)
	{
		$this->gumballMachine = $gumballMachine;
	}

	public function insertQuarter()
	{
		print "You inserted a quarter\n";
		$this->gumballMachine->setState($this->gumballMachine->getHasQuarterState());
	}

	public function ejectQuarter()
	{
		print "You haven't inserted a quarter\n";
	}

	public function turnCrank()
	{
		print "You turned, but there's no quarter\n";
	}

	public function dispense()
	{
		print "You need to pay first\n";
	}
}
?>
