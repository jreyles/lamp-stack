<?php

class Bike
{
	// attributes
	public $price;
	public $max_speed;
	public $miles;
	// constructor
	public function __construct($price,$max_speed)
	{
		 $this->price = $price;
		 $this->max_speed = $max_speed;
		 $this->miles = 0;
	}
	//methods
	public function displayInfo()
    {
        echo "hello\n";
        echo "{$this->price} , {$this->max_speed}, {$this->miles}.";
    }
    public function get_displayInfo()
    {
        return $this->property1;
    }
    public function reverse()
    {
    	echo "Reversing";
    	$this->miles = $this->miles - 5;
    	return $this;
    }
    public function drive()
    {
    	echo "Driving";
    	$this->miles = $this->miles + 10;
    	return $this;
    }
    
}

$bike1 = new Bike(43,21); // price and max speed.
echo $bike1->drive()->reverse()->drive()->displayInfo();
?>