<?php

namespace Command;

class Light
{
	private $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
	public function on()
	{
		print "light is on now...\n";
	}

	public function off()
	{
		print "light is off now...\n";
	}
}

class LightOnCommand implements Command
{
	private $light;
	private $name = 'Light On Command';

	public function __construct($light)
	{
		$this->light = $light;
	}

	public function execute()
	{
		$this->light->on();
	}

	public function undo()
	{
		$this->light->off();
	}
	
	public function getName()
	{
		return $this->name;
	}	
}

class LightOffCommand implements Command
{
	private $light;
	private $name = 'Light Off Command';

	public function __construct($light)
	{
		$this->light = $light;
	}

	public function execute()
	{
		$this->light->off();
	}

	public function undo()
	{
		$this->light->on();
	}
	
	public function getName()
	{
		return $this->name;
	}

}

?>
