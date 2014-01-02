<?php

namespace Command;

class Stereo
{
	public function on()
	{
		print "Stereo is on now...\n";
	}

	public function off()
	{
		print "Stereo is off now..\n";
	}

	public function setCD()
	{
		print "Stereo is setting cd now...\n";
	}

	public function setVolume($volume)
	{
		print "Stereo's volume is $volume\n";
	}

}

class StereoOnWithCDCommand implements Command
{
	private $stereo;
	private $name = 'Stereo On Witch CD Command';

	public function __construct($stereo)
	{
		$this->stereo = $stereo;
	}

	public function execute()
	{
		$this->stereo->on();
		$this->stereo->setCD();
		$this->stereo->setVolume(11);
	}

	public function undo()
	{
		$this->stereo->off();
	}

	public function getName()
	{
		return $this->name;
	}
}

class StereoOffCommand implements Command
{
	private $stereo;
	private $name = 'Stereo off command';
	public function __construct($stereo)
	{
		$this->stereo = $stereo;
	}

	public function execute()
	{
		$this->stereo->off();
	}

	public function undo()
	{
		$this->stereo->on();
	}

	public function getName()
	{
		return $this->name;
	}
}
?>
