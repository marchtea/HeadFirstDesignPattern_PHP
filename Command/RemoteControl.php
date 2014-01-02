<?php

namespace Command;

class RemoteControl
{
	private $onCommands;
	private $offCommands;
	private $undoCommand;

	public function __construct()
	{
		$this->onCommands = array();
		$this->offCommands = array();

		$noCommand = new NoCommand();
		for($i = 0;$i < 7; $i++)
		{
			$this->onCommands[$i] = $noCommand;
			$this->offCommands[$i] = $noCommand;
		}
		$this->undoCommand = $noCommand;
	}

	public function setCommand($slot, $onCommand, $offCommands)
	{
		$this->onCommands[$slot] = $onCommand;
		$this->offCommands[$slot] = $offCommands;
	}

	public function onButtonWasPushed($slot)
	{
		print "on button pressed...\n";
		$this->onCommands[$slot]->execute();
		$this->undoCommand = $this->onCommands[$slot];
	}

	public function offButtonWasPushed($slot)
	{
		print "off button pressed...\n";
		$this->offCommands[$slot]->execute();
		$this->undoCommand = $this->onCommands[$slot];
	}

	public function undoButtonWasPushed()
	{
		print "undo button pressed...\n";
		$this->undoCommand->undo();
	}

	public function __toString()
	{
		$output = "\n------ Remote Control -----\n";
		for($i = 0; $i < count($this->onCommands); $i++)
		{
			$output .= "[slot $i] ".$this->onCommands[$i]->getName()." \t".$this->offCommands[$i]->getName()." \n";
		}
		return $output;
	}
}
?>
