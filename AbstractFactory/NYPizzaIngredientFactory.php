<?php
namespace AbstractFactory;
include 'Ingredient.php';

class NYPizzaIngredientFactory implements PizzaIngredientFactory {
	public function createDough(){
		return new Dough('ThinCrust');
	}
	public function createSauce(){
		return new Sauce('Marinara');
	}
	public function createCheese(){
		return new Cheese('ReggianoCheese');
	}
	public function createVeggies(){
		$veggies = array();
		$veggies[] = new Veggies('Garlic');
		$veggies[] = new Veggies('Onion');
		$veggies[] = new Veggies('Mushroom');
		$veggies[] = new Veggies('RedPepper');
		return $veggies;
	}
	public function createPepperoni(){
		return new Pepperoni('Sliced');
		
	}
	public function createClam(){
		return new Clam('Fresh');
	}
	
}
?>
