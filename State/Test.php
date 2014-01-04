<?php

namespace State;
require_once('GumballMachine.php');

$machine = new GumballMachine(10);
$machine->insertQuarter();
$machine->turnCrank();

?>
