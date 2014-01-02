<?php

namespace Command;

interface Command
{
	public function execute();
	public function undo();
}

class NoCommand implements Command
{
	private $name = 'NoCommand';
	public function execute(){}
	public function undo(){}
	public function getName()
	{
		return $this->name;
	}	
}

?>
