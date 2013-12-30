<?php

class PizzaStore {
	function test(){
		print "test";
	}

	public function orderPizza($type){
		$pizza = null;
		$pizza = createPizza($type);

		$pizza.prepare();
		$pizza.bake();
		$pizza.cut();
		$pizza.box();

	}


}

$store = new PizzaStore();
$store->test();



?>
