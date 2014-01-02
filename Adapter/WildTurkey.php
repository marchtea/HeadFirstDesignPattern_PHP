<?php

namespace Adapter;
require_once('Turkey.php');

class WildTurkey implements Turkey
{
	public function gobble()
	{
		print "Gobble gobble\n";
	}
	public function fly()
	{
		print "turkey flying a short distance\n";
	}
}
?>
