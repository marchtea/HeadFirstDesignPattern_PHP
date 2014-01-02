<?php

namespace Adapter;

require_once('TurkeyAdapter.php');
require_once('WildTurkey.php');
require_once('MallardDuck.php');

$duck = new MallardDuck();

$turkey = new WildTurkey();
$fakeduck = new TurkeyAdapter($turkey);

print "The Turkey says...\n";
$turkey->gobble();
$turkey->fly();

print "the Duck says...\n";
testDuck($duck);

print "The Fake Duck says...\n";
testDuck($fakeduck);


function testDuck($duck)
{
	$duck->quack();
	$duck->fly();
}


?>
