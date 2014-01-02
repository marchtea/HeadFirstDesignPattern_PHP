<?php

namespace Adapter;

require_once('Duck.php');

class TurkeyAdapter implements Duck
{
	private $turkey;

	public function __construct($turkey)
	{
		$this->turkey = $turkey;
	}

	public function quack()
	{
		$this->turkey->gobble();
	}

	public function fly()
	{
		//turkey fly shortly, to be a fake duck, it fly 5 times
		foreach(range(0,5) as $i){
			$this->turkey->fly();
		}
	}
}
?>
