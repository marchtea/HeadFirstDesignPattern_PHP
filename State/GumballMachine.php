<?php

namespace State;
require_once('State.php');
require_once('HasQuarterState.php');
require_once('NoQuarterState.php');
require_once('SoldOutState.php');
require_once('SoldState.php');
require_once('WinnerState.php');


class GumballMachine
{
	private $soldOutState;
	private $noQuarterState;
	private $hasQuarterState;
	private $soldState;
	private $winnerState;

	private $state;
	private $count = 0;

	public function __construct($numberGumballs)
	{
		$this->soldOutState = new SoldOutState($this);
		$this->noQuarterState = new NoQuarterState($this);
		$this->hasQuarterState = new hasQuarterState($this);
		$this->soldState = new SoldState($this);
		$this->winnerState = new WinnerState($this);
		$this->count = $numberGumballs;
		if ($numberGumballs > 0)
		{
			$this->state = $this->noQuarterState;
		}
	}

	public function insertQuarter()
	{
		$this->state->insertQuarter();
	}

	public function ejectQuarter()
	{
		$this->state->ejectQuarter();
	}

	public function turnCrank()
	{
		$this->state->turnCrank();
		$this->state->dispense();
	}

	public function setState($state)
	{
		$this->state = $state;
	}

	public function releaseBall()
	{
		print "A gumball comes rolling out the slot...\n";
		if ($this->count != 0)
		{
			$this->count--;
		}
	}

	public function getCount()
	{
		return $this->count;
	}

	public function getNoQuarterState()
	{
		return $this->noQuarterState;
	}

	public function getHasQuarterState()
	{
		return $this->hasQuarterState;
	}

	public function getSoldState()
	{
		return $this->soldState;
	}

	public function getSoldOutState()
	{
		return $this->soldOutState;
	}

	public function getWinnerState()
	{
		return $this->winnerState;
	}
}
?>
