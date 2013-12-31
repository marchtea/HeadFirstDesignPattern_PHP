<?php
class Dough{
	protected $type;
	public function __construct($t){
		$this->type = $t;
	}
	public function show(){
		print "Dough: $this->type\n";
	}
}

class Sauce{
	private $type;
	public function __construct($type){
		$this->type = $type;
	}
	public function show(){
		print "Sauce: $this->type\n";
	}
}

class Cheese{
	private $type;
	public function __construct($type){
		$this->type = $type;
	}
	public function show(){
		print "Cheese: $this->type\n";
	}
}

class Veggies{
	private $type;
	public function __construct($type){
		$this->type = $type;
	}
	public function show(){
		print "Veggies: $this->type\n";
	}
}

class Pepperoni{
	private $type;
	public function __construct($type){
		$this->type = $type;
	}
	public function show(){
		print "Pepperoni: $this->type\n";
	}
}

class Clam{
	private $type;
	public function __construct($type){
		$this->type = $type;
	}
	public function show(){
		print "Clam: $this->type\n";
	}
}
?>
