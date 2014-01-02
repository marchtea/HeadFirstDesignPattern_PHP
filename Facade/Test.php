<?php

namespace Facade;
require_once('HomeTheaterFacade.php');

$amp = new Amplifier();
$tuner = new Tuner($amp);
$dvd = new DvdPlayer($amp);
$cd = new CdPlayer($amp);
$projector = new Projector($dvd);
$lights = new TheatherLights();
$screen = new Screen();
$popper = new PopcornPopper();


$homeTheater = new HomeTheaterFacade($amp, $tuner, $dvd, 
							$cd, $projector, $screen, $lights, $popper);

$homeTheater->watchMovie("The White Shark");
$homeTheater->endMovie();


?>
