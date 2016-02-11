<?php
class Animal 
{
	public $name;
	public $health;
	public function __construct()
	{
		$this->health = 100;
	}
	public function walk()
	{
		$this->health = $this->health - 1;
		return $this;
	}
	public function run()
	{
		$this->health = $this->health - 5;
		return $this;
	}
	public function displayHealth()
	{
		echo "Name: {$this->name}\n";
		echo "Health: {$this->health}\n";
	}
}
class Dog extends Animal 
{
	public function __construct()
	{
		$this->health = 150;
	}
	public function pet()
	{
		$this->health += 5;
		return $this;
	}
}

class Dragon extends Animal
{
	public function __construct()
	{
		$this->health = 170;
	}
		public function displayHealth()
	{
		echo "Name: {$this->name}\n";
		echo "Health: {$this->health}\n";
		echo "This is the dragon!\n";
	}
		public function fly()
	{
		$this->health = $this->health - 10;
		return $this;
	}

}

$anim1 = new Animal();
$anim1->walk()->walk()->walk()->run()->run()->displayHealth();

$anim2 = new Dog();
$anim2->walk()->walk()->walk()->run()->run()->pet()->displayHealth();

$anim3 = new Dragon();
$anim3->walk()->walk()->walk()->run()->run()->fly()->fly()->displayHealth();

/*
Now, create another class called Dog that inherits everything 
that the Animal does and have, but 1) have the default health
 by 150 and 2) add a new method called pet, which when invoked,
  increase the health by 5. Have the Dog walk three times, 
  run twice, petted once, and have it display its health.
*/


/*
Now, create another classed called Dragon that inherits 
everything that the Animal does and have, but 1) have the 
default health be 170 and 2) add a new method called fly, 
which when invoked, decreased the health by 10. Have the
 Dragon walk three times, run twice, fly twice, and have it
  display its health. When the Dragon's displayHealth function
   is called have it say 'this is a dragon!'
    before it displays the default information 
    (make sure you still call the parent's displayHealth 
    function).

Now for the first instance of the animal 
(instance called 'animal'), try calling a method
 'fly' or 'pet' and make sure it doesn't work. :)
*/
?>