<?php
session_start();
Class Deck
{
	// Implement the singly-linked list
	public function __construct() //card is our node value
	{
		$this->head = null; // starts here...
	}
	public function add($val)
	{
		if($this->head == null){
			$this->head = new Card($val);
		}
		else{
			$current = $this->head;
			while($current->next){
				$current = $current->next;
			}
			$current->next = new Card($val);
		}

	}
	public function swap($pos1,$pos2)
	{
		$current1 = $this->head;
		$current2 = $this->head;
		for($i=1;$i < $pos1 - 1; $i++){
			$current1 = $current1->next;
		}
		for($i=1; $i < $pos2 -1;$i++){
			$current2 = $current2->next;
		}
		$temp1 = $current1->next;
		$temp2 = $current2->next;
		$current1->next = $current2->next;
		$temp2=$temp1;
	}
}
Class Card
{
	public function __construct($val)
	{
		$this->value = $val;
		$this->next = null;
	}
}

$deck = new Deck;
$deck->add("cards-png/c1.png");
$deck->add("cards-png/c2.png");
$deck->add("cards-png/c3.png");
$deck->add("cards-png/c4.png");
$deck->add("cards-png/c5.png");
$deck->add("cards-png/c6.png");
$deck->add("cards-png/c7.png");
$deck->add("cards-png/c8.png");
$deck->add("cards-png/c9.png");
$deck->add("cards-png/c10.png");
$deck->add("cards-png/cj.png");
$deck->add("cards-png/cq.png");
$deck->add("cards-png/ck.png");
//$deck->swap(4,8);