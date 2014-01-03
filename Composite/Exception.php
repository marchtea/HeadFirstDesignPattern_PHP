<?php

namespace Composite;

class UnsupportOperationException extends \Exception
{
	public function __construct()
	{
		$this->message = "Unsupport operation";
		parent::__construct($this->message);
	}
}

?>
