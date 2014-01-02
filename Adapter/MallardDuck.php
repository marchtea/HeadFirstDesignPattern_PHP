<?php

namespace Adapter;
require_once('Duck.php');

class MallardDuck implements Duck
{
	public function quack()
	{
		print "Quack\n";
	}
	public function fly()
	{
		print "MarllardDuck is flying...\n";
	}
}
?>
