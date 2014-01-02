<?php

namespace Template;

abstract class CaffeineBeverage
{
	public final function prepareRecipe()
	{
		$this->boilWater();
		$this->brew();
		$this->pourInCup();
		if ($this->customWantsCondiments()) {
			$this->addCondiments();
		}
	}

	protected abstract function brew();
	protected abstract function addCondiments();

	private function boilWater()
	{
		print "Boiling water\n";
	}

	private function pourInCup()
	{
		print "Pouring into cup\n";
	}

	protected function customWantsCondiments()
	{
		return true;
	}
}

class Tea extends CaffeineBeverage
{
	protected function brew()
	{
		print "Steeping the tea\n";
	}

	protected function addCondiments()
	{
		print "Adding lemon\n";
	}
}

class Coffee extends CaffeineBeverage
{
	protected function brew()
	{
		print "Dripping Coffee through filter\n";
	}

	protected function addCondiments()
	{
		print "Add Sugar and Milk\n";
	}

	public function customWantsCondiments() 
	{
		$answer = $this->getUserInput();

		if (preg_match('/^y/i', $answer) > 0)
		{
			return true;
		}else{
			return false;
		}
	}
	private function getUserInput()
	{
		print "Would you like milk and sugar with your coffee (y/n)?";
		$result = fgets(STDIN);
		return $result;
	}
}


$tea = new Tea();
$tea->prepareRecipe();

$coffee = new Coffee();
$coffee->prepareRecipe();


?>
