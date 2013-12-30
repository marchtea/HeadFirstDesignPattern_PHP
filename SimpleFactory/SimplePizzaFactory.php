<?php

namespace SimpleFactory;

class SimplePizzaFactory {
	public function createPizza($type){
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





?>
