<?php

namespace Facade;

class PopcornPopper
{
	public function on()
	{
		print "popcorn popper is on\n";
	}

	public function off()
	{
		print "popcorn popper is off\n";
	}

	public function pop()
	{
		print "pop the popcorn\n";
	}

	public function __toString()
	{
	}
}
?>
