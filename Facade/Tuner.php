<?php

namespace Facade;

class Tuner
{
	private $amplifier;

	public function __construct($amplifier)
	{
		$this->amplifier = $amplifier;
	}

	public function on()
	{
		print "Tuner is on\n";
	}

	public function off()
	{
		print "Tuner is off\n";
	}

	public function setAm()
	{
		print "Tuner is on Am frequency\n";
	}

	public function setFm()
	{
		print "Tuner is on Fm frequency\n";
	}

	public function setFrequency($feq)
	{
		print "Setting Tuner's frequency at $feq\n";
	}
}
?>
