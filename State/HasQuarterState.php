<?php

namespace State;

class HasQuarterState implements State
{
	private $gumballMachine;

	public function __construct($gumballMachine)
	{
		$this->gumballMachine = $gumballMachine;
	}

	public function insertQuarter()
	{
		print "You can't insert another quarter\n";
	}

	public function ejectQuarter()
	{
		print "Quarter returned\n";
		$this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
	}

	public function turnCrank()
	{
		print "You turned..\n";
		$this->gumballMachine->setState($this->gumballMachine->getSoldState());
	}

	public function dispense()
	{
		print "No gumball dispensed\n";
	}
}

?>
