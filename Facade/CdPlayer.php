<?php

namespace Facade;

class CdPlayer
{
	private $amplifier;

	public function __construct($amplifier)
	{
		$this->amplifier = $amplifier;
	}

	public function on()
	{
		print "CD player is on\n";
	}

	public function off()
	{
		print "CD player is off\n";
	}

	public function eject()
	{
		print "Eject CD player\n";
	}

	public function pause()
	{
		print "CD player paused\n";
	}

	public function play()
	{
		print "CD player is playing\n";
	}

	public function stop()
	{
		print "CD player stopped\n";
	}

	public function __toString()
	{
	}

}
?>
