<?php
namespace SimpleFactory;

class Pizza{
	public function prepare(){
		print "Pizza prepared.\n";
	}
	public function bake(){
		print "Pizza baked.\n";
	}
	public function cut(){
		print "Pizza cutted\n";
	}
	public function box(){
		print "Pizza boxed\n";
	}
}

class CheesePizza extends Pizza{

}

class PepperoniPizza extends Pizza{

}

class ClamPizza extends Pizza{

}

class VeggiePizza extends Pizza{

}
?>
