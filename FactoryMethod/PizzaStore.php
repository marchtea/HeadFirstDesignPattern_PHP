<?php

namespace FactoryMethod;

include 'Pizza.php';

abstract class PizzaStore {
	function test(){
		print "test";
	}

	public function orderPizza($type){
		$pizza = $this->createPizza($type);

		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();

		return $pizza;

	}
	abstract function createPizza($type);
}

class nyPizzaStore extends PizzaStore{
	function createPizza($type){
		$pizza = null;
		if (strcmp($type, 'cheese') == 0){
			$pizza = new CheesePizza();
		}else if (strcmp($type, 'pepperoni') == 0){
			$pizza = new PepperoniPizza();
		}else if (strcmp($type, 'clam') == 0){
			$pizza = new ClamPizza();
		}else if (strcmp($type, 'veggie') == 0){
			$pizza = new VeggiePizza();
		}
		return $pizza;
	}
}

$store = new nyPizzaStore();
$store->orderPizza("cheese");



?>
