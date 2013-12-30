<?php
namespace FactoryMethod;

class Pizza{
	protected $name;
	protected $dough;
	protected $sauce;
	protected $topping;

	public function prepare(){
		print "preparing $this->name\n";
		print "Tossing dough: $this->dough\n";
		print "Adding sauce: $this->sauce\n";
		print "Adding toppings:";
		for($i = 0;$i != count($this->topping); $i++){
			print "\t".$this->topping[$i];
		}
		print "\nPizza prepared.\n";
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
	function __construct(){
		$this->name = "Cheese Pizza";
		$this->dough = 'Thin Crust Dough';
		$this->sauce = 'Marinara Sauce';

		$this->topping = array('Grated Reggiano Cheese');
	}

}

class PepperoniPizza extends Pizza{

}

class ClamPizza extends Pizza{

}

class VeggiePizza extends Pizza{

}
?>
