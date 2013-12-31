<?php

class Singleton 
{
	public static function getInstance(){

		static $instance;

		if (null == $instance){
			$instance = new Singleton();
		}

		return $instance;
	}

	private function __construct()
	{}

	private function __clone()
	{}
}

?>
