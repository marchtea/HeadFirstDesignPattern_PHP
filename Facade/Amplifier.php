<?php

namespace Facade;

class Amplifier
{
	private $tuner;
	private $dvdPlayer;
	private $cdPlayer;

	public function on()
	{
		print "Amplifier is on now\n";
	}

	public function off()
	{
		print "Amplifier is off now\n";
	}

	public function setCd($cdPlayer)
	{
		print "setting cd...\n";
		$this->cdPlayer = $cdPlayer;
	}

	public function setDvd($dvdPlayer)
	{
		print "Setting dvd...\n";
		$this->dvdPlayer = $dvdPlayer;
	}

	public function setStereoSound()
	{
		print "set stereo sound";
	}

	public function setSurroundSound()
	{
		print "Setting surround sound\n";
	}

	public function setTuner($tuner)
	{
		print "setting tuner...\n";
		$this->tuner = $tuner;
	}

	public function setVolume($volume)
	{
		print "setting volume to $volume\n";
	}

	public function __toString()
	{
	}
}
?>
