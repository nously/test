<?php



class Car{
	public $a;
	function test(){
		$this->a = "Hello World";
	}

}


class SportsCar extends Car {
	
}


$b = new SportsCar();
$b -> test();
echo $b->a;
