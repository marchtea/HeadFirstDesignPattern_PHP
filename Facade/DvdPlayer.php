<?php

namespace Facade;

class DvdPlayer
{
	private $amplifier;

	public function __construct($amplifier)
	{
		$this->amplifier = $amplifier;
	}

	public function on()
	{
		print "Dvd Player is on\n";
	}

	public function off()
	{
		print "Dvd Player is off\n";
	}

	public function eject()
	{
		print "Eject dvd\n";
	}

	public function pause()
	{
		print "Dvd paused\n";
	}

	public function play($movie)
	{
		print "Playing Dvd: $movie\n";
	}

	public function setSurroundAudio()
	{
		print "Set Dvd to surround audio\n";
	}

	public function setTwoChannelAudio()
	{
		print "Set Dvd to two channel audio\n";
	}

	public function stop()
	{
		print "Stop Dvd\n";
	}
	
	
}
?>
