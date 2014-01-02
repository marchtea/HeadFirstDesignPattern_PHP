<?php

namespace Facade;

class Projector
{
	private $dvdPlayer;

	public function __construct($dvdPlayer)
	{
		$this->dvdPlayer = $dvdPlayer;
	}

	public function on()
	{
		print "Projector is on\n";
	}

	public function off()
	{
		print "Projector is off\n";
	}

	public function tvMode()
	{
		print "Set projector to tv mode\n";
	}

	public function wideScreenMode()
	{
		print "Set projector to wide screen mode\n";
	}

	public function __toString()
	{
	}
}

?>
