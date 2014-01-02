<?php

namespace Command;

include 'SimpleRemoteControl.php';
include 'Command.php';
include 'LightOnCommand.php';
include 'Light.php';

$remote = new SimpleRemoteControl();
$light = new Light();
$lighton = new LightOnCommand($light);

$remote->setCommand($lighton);
$remote->buttonWasPressed();

?>
