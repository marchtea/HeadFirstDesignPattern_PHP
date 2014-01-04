<?php

namespace State;

class WinnerState implements State
{
	private $gumballMachine;

	public function __construct($gumballMachine)
	{
		$this->gumballMachine = $gumballMachine;
	}

	public function insertQuarter()
	{
		print "Please wait, we're already giving you a gumball\n";
	}

	public function ejectQuarter()
	{
		print "Sorry, you already turned the crank\n";
	}

	public function turnCrank()
	{
		print "Turning twice doesn't get you another gumball\n";
	}

	public function dispense()
	{
		print "You'RE A WINNER! You get two gumballs for your quarter\n";
		$this->gumballMachine->releaseBall();
		if ($this->gumballMachine->getCount() == 0)
		{
			$this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
		}else{
			$this->gumballMachine->releaseBall();
			if ($this->gumballMachine->getCount() == 0)
			{
				$this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
			}else{
				print "Oops, out of gumballs!\n";
				$this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
			}
		}
	}

}

?>
