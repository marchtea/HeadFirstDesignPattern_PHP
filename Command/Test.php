<?php

namespace Command;

include 'Command.php';
include 'Light.php';
include 'Stereo.php';
include 'RemoteControl.php';

$remote = new RemoteControl();

$livingRoomLight = new Light("Living Room");
$kitchenLight = new Light("Kitchen");
$stereo = new Stereo("Living Room");

$livingRoomLightOn = new LightOnCommand($livingRoomLight);
$livingRoomLightOff = new LightOffCommand($livingRoomLight);
$kitchenLightOn = new LightOnCommand($kitchenLight);
$kitchenLightOff = new LightOffCommand($kitchenLight);

$stereoOn = new StereoOnWithCDCommand($stereo);
$stereoOff = new StereoOffCommand($stereo);

$remote->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
$remote->setCommand(1, $kitchenLightOn, $kitchenLightOff);
$remote->setCommand(2, $stereoOn, $stereoOff);

print $remote;

$remote->onButtonWasPushed(0);
$remote->offButtonWasPushed(0);

$remote->onButtonWasPushed(1);
$remote->offButtonWasPushed(1);
$remote->undoButtonWasPushed();

$remote->onButtonWasPushed(2);
$remote->offButtonWasPushed(2);
$remote->undoButtonWasPushed();
?>
