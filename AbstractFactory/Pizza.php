<?php
namespace AbstractFactory;
abstract class Pizza{
	private $name;
	private $dough;
	private $sauce;
	private $veggies;
	private $cheese;
	private $pepperoni;
	private $clam;

	abstract public function prepare();
	public function bake(){
		print "baked\n";
	}
	public function cut(){
		print "Cutting Pizza\n";
	}
	public function box(){
		print "Place Pizza\n";
	}
	public function setName($name){
		$this->name = $name;
	}
}

class CheesePizza extends Pizza{
	private $ingredientFactory;
	public function __construct($factory){
		$this->name = "cheese pizza";
		$this->ingredientFactory = $factory;
	}
	public function prepare(){
		print "preparing $this->name\n";
		$this->dough = $this->ingredientFactory->createDough();
		$this->sauce = $this->ingredientFactory->createSauce();
		$this->cheese = $this->ingredientFactory->createCheese();
	}
}

class ClamPizza extends Pizza{
	private $ingredientFactory;
	public function __construct($factory){
		$this->name = "clam pizza";
		$this->ingredientFactory = $factory;
	}
	public function prepare(){
		print "preparing $this->name\n";
		$this->dough = $this->ingredientFactory->createDough();
		$this->sauce = $this->ingredientFactory->createSauce();
		$this->cheese = $this->ingredientFactory->createCheese();
		$this->clam = $this->ingredientFactory->createClam();
	}
}
?>
