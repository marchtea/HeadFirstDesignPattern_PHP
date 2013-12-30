<?php

namespace SimpleFactory;
include "Pizza.php";
include 'SimplePizzaFactory.php';

class PizzaStore{
	private $_factory;//SimplePizzaFactory

	public function __construct($factory){
		$this->_factory = $factory;
	}

	public function orderPizza($type){
		$pizza = $this->_factory->createPizza($type);

		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
}


$factory = new SimplePizzaFactory();
$store = new PizzaStore($factory);
$store->orderPizza("cheese");

?>
