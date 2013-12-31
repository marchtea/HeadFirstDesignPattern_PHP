<?php

namespace AbstractFactory;

abstract class PizzaStore{
	public function orderPizza($type){
		$pizza = $this->createPizza($type);
		$pizza->prepare();
		$pizza->bake();
		$pizza->cut();
		$pizza->box();
		return $pizza;
	}
	abstract public function createPizza($type);
}
?>
