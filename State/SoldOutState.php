<?php

namespace State;

class SoldOutState implements State
{
	private $gumballMachine;

	public function __construct($gumballMachine)
	{
		$this->gumballMachine = $gumballMachine;
	}

	public function insertQuarter()
	{
		print "Sorry, gumball has already sold out..\n";
	}

	public function ejectQuarter()
	{
		print "You haven't inserted a quarter\n";
	}

	public function turnCrank()
	{
		print "Turn crank has no use\n";
	}

	public function dispense()
	{
		print "No gumball\n";
	}

}

?>
