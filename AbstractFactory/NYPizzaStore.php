<?php
namespace AbstractFactory;
include 'PizzaStore.php';
include 'NYPizzaIngredientFactory.php';

class NYPizzaStore extends PizzaStore{
	public function createPizza($type){
		$pizza = null;
		$factory = new NYPizzaIngredientFactory();
		if (strcmp(type, 'cheese') == 0){
			$pizza = new CheesePizza($factory);
			$pizza->setName('New York Style Cheese Pizza');
		}else if (strcmp(type, 'clam') == 0){
			$pizza = new ClamPizza($factory);
			$pizza->setName('New York Style Clam Pizza');
		}
		return $pizza;
	}
}


?>
