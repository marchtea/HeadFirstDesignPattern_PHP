<?php

namespace Command;

class SimpleRemoteControl
{
	private $slot;

	public function __construct(){}
	
	public function setCommand($command)
	{
		$this->slot = $command;
	}

	public function buttonWasPressed()
	{
		print "Button pressed...\n";
		$this->slot->execute();
	}
}
?>
