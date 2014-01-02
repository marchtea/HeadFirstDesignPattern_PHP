<?php

namespace Facade;

class Screen
{
	public function up()
	{
		print "up the screen\n";
	}
	public function down()
	{
		print "down the screen\n";
	}
	public function __toString()
	{
	}
}

?>
