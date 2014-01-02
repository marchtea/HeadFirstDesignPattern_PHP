<?php

namespace Facade;

class TheatherLights
{
	private $dim;
	public function on()
	{
		print "Theater lights are on\n";
	}

	public function off()
	{
		print "Theater lights are off\n";
	}

	public function dim($dim)
	{
		print "Dim the theater lights to $dim\n";
		$this->dim = $dim;
	}

	public function __toString()
	{
	}
}
?>
