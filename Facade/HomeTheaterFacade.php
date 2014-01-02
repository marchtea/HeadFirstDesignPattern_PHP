<?php

namespace Facade;
require_once('Amplifier.php');
require_once('CdPlayer.php');
require_once('DvdPlayer.php');
require_once('PopcornPopper.php');
require_once('Projector.php');
require_once('Screen.php');
require_once('TheatherLights.php');
require_once('Tuner.php');

class HomeTheaterFacade
{
	private $amp;
	private $tuner;
	private $dvd;
	private $cd;
	private $projector;
	private $lights;
	private $screen;
	private $popper;

	public function __construct($amp, $tuner, $dvd, $cd, $projector, $screen
						,$lights, $popper)
	{
		$this->amp = $amp;
		$this->tuner = $tuner;
		$this->dvd = $dvd;
		$this->cd = $cd;
		$this->projector = $projector;
		$this->lights = $lights;
		$this->screen = $screen;
		$this->lights = $lights;
		$this->popper = $popper;
	}

	public function watchMovie($movie)
	{
		print "Get ready to watch movie: $movie\n";
		$this->popper->on();
		$this->popper->pop();
		$this->lights->dim(10);
		$this->screen->down();
		$this->projector->on();
		$this->projector->wideScreenMode();
		$this->amp->on();
		$this->amp->setDvd($this->dvd);
		$this->amp->setSurroundSound();
		$this->amp->setVolume(5);
		$this->dvd->on();
		$this->dvd->play($movie);
		print "\n";
	}

	public function endMovie()
	{
		print "\nShutting movie theater down...\n";
		$this->popper->off();
		$this->lights->on();
		$this->screen->up();
		$this->projector->off();
		$this->amp->off();
		$this->dvd->stop();
		$this->dvd->eject();
		$this->dvd->off();
	}
}

?>
