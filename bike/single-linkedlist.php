<?php

Class Node
{
	public function __construct($value)
	{
		$this->value= $value;
		$this->next = null;
	}
}

Class SinglyLinkedList{
	public function __construct()
	{
		$this->head = null;
	}
	public function add($val)
	{
		if($this->head == null)
		{
			$this->head = new Node($val);
		}
		else
		{
			$current = $this->head;
			while($current->next) //Useful tool for traversing through a linkedlist
			{
				$current = $current->next;
			}
			$current->next = new Node($val);
		}
	}
	public function remove($val)
	{
		if($this->head->value==$val)
		{
			$this->head=$this->head->next;
		}
		else
		{
			$current = $this->head;
			while($current->next->value != $val && $current->val)
			{
				$current = $current->next;
			}
			$temp = $current->next->next;
			$current->next = $temp;
		}
	}
	public function find($val)
	{
		$current = $this->head;

		while($current != null)
		{
			if($current->value == $val)
			{
				return $current;
			}
			$current = $current->next;
		}
	}

	public function printValues()
	{
		$current = $this->head;
		while($current)
		{
			echo $current->value . '<br>';
			$current = $current->value;
		}
	}
	 public function insert($valueAfter, $newValue)
	 {
	 	if($valueAfter == $newValue)
	 	{
	 		return true;
	 	}
	 	else
	 	{
	 		$newList->add($newValue);
	 	}
 	 }
	 public function isEmpty()
 	 {
 	 	if(isset($this))
 	 	{
 	 		return true;
 	 	}
 	 	else
 	 	{
 	 		return false;
 	 	}

 	 }
 	public function removeDups($val)
 	{
 		if(Node($val) == null)
 		{
 			return true;
 		}

 	}
}

// create new Linked List Object
$newList = new SinglyLinkedList();
// set the linked list head to a new node
$newList->head= new Node(1);
// head node now add the next node
$newList->head->next = new Node(2);
// continue adding nodes to end of Linked List
$newList->head->next->next = new Node(3);
$newList->head->head->next->next = new Node(4);
$newList->head->next->next->next->next = new Node(5);

$newList2 = new SinglyLinkedList();
$newList2->add(1);
$newList2->add(2);
$newList2->add(3);
$newList2->add(4);
$newList2->add(5);

$newList->head->next->next->next->next = null;
$temp = $newList->head->next->next->next;
$newList->head->next = $temp;

$newList->remove(1);
$newList->remove(3);
$newList->remove(5);


var_dump($newList->find(3));
var_dump($newList->find(99));

$newList->add(1);
$newList->add(2);
$newList->add(3);
$newList->add(4);
$newList->add(5);
var_dump($newList);
