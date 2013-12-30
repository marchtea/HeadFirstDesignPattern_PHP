<?php

interface FlyBehavior{
	public function fly();
}

class FlyWithWings implements FlyBehavior{
	public function fly(){
		print "I can fly!!\n";
	}	
}

class FlyNoWay implements FlyBehavior{
	public function fly(){
		print "I can't fly.....e....\n";
	}
}

interface QuackBehavior{
	public function quack();
}

class Quack implements QuackBehavior{
	public function quack(){
		print "quack...\n";
	}
}

class MuteQuack implements QuackBehavior{
	public function quack(){
		print "......\n";
	}
}

class Squeak implements QuackBehavior{
	public function quack(){
		print "squeak\n";
	}
}

abstract class Duck{
	private $_flyBehavior;
	private $_quackBehavior;
	public function __construct(){
	}
	
	public abstract function display();

	public function performFly(){
		$this->_flyBehavior->fly();
	}

	public function performQuack(){
		$this->_quackBehavior->quack();
	}

	public function swim(){
		print "All ducks float, hahaha!!\n";
	}
}

class RealDuck extends Duck{
	public function __construct(){
		$this->_flyBehavior = new FlyWithWings();
		$this->_quackBehavior = new Quack();
	}
	
	public function display(){
		print "I'm a real duck\n";
	}
}

class DecoyDuck extends Duck{
	public function __construct(){
		$this->_flyBehavior = new FlyNoWay();
		$this->_quackBehavior = new Squeak();
	}
	public function display(){
		print "I'm a decoy...\n";
	}
}


$rd = new RealDuck();
$rd->display();
$rd->performFly();
$rd->performQuack();

$dd = new DecoyDuck();
$dd->display();
$dd->performFly();
$dd->performQuack();


?>
