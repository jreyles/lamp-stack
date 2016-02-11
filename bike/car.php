<?php

class Car
{
	// attributes
	public $price;
	public $speed;
	public $fuel;
    public $mileage;
    public $tax;
    
	// constructor
	public function __construct($price,$speed,$fuel,$mileage)
	{
	   $this->price = $price;
       $this->speed = $speed;
       $this->fuel = $fuel;
       $this->mileage = $mileage;
       if($price > 10000)
       {
        $this->tax = 0.15;
       }
       else 
       {
        $this->tax = 0.12;
       }
	}
	//methods
	public function Display_all()
    {
        echo "Price: {$this->price}\n";
        echo "Speed: {$this->speed}\n";
        echo "Fuel: {$this->fuel}\n";
        echo "Mileage: {$this->mileage}\n";
        echo "Tax: {$this->tax}\n\n";

    }
    
    
}

$obj1 = new Car(2000,35,'Full',15); // price and max speed.
$obj2 = new Car(2000,5,'Not Full',105);
$obj3 = new Car(2000,15,'Kind of Full',95);
$obj4 = new Car(2000,25,'Full',25);
$obj5 = new Car(2000,45,'Empty',25);
$obj6 = new Car(20000000,35,'Empty',15);
echo $obj1->Display_all();
echo $obj2->Display_all();
echo $obj3->Display_all();
echo $obj4->Display_all();
echo $obj5->Display_all();
echo $obj6->Display_all();

?>