<?php
//here node has two hooks: $prev and $next
//singly linked list's node only has one hook (e.g. $next) while doubly linked list's node has two hooks (e.g. $next and $prev)
class Node {
  public $value, $prev, $next;
  public function __construct($value)
  {
    $this->value = $value;
  }
}
//implementation of linked list
class DoublyLinkedList {
  public $head, $tail;
  public function __construct(){
    $this->head = NULL; //have the head point to NULL
    $this->tail = NULL; //have the tail point to NULL
  }
  public function add($value){

    if($this->head==null && $this->tail==null)
    {
      $this->head = new Node($value);
      $this->tail = new Node($value);
    }
    else
    {
      $current = $this->head;
      $previous = $this->prev;
      while($current->next) //Useful tool for traversing through a linkedlist
      {
        $current = $current->next;
        $previous = $previous->prev;
      }
      $current->next = new Node($value);
      $previous->prev = new Node($value);
    }
  }
  //finds the node on the $pos position
  public function find($pos){
    //your code here
  }
  //finds all nodes with the value of $value
  public function findAllNodesWithValueOf($value){
    //your code here
  }
  //removes all nodes with the value of $value
  public function removeAllNodesWithValueOf($value){
    //your code here
  }
  //removes node of position $pos
  public function removeNode($pos){
    //your code here
  }
  //inserts a new value in the specified position
  public function insert($pos, $value){
    //your code here
  }
  public function printValues(){
    $node = $this->head;  //have $node point to where $this->head is pointing to
    if($node == NULL) {  //if $node points to NULL
      echo "Linked List is empty";
      return NULL;
    }
    while($node->next != NULL){
      echo "Node value is " . $node->value ."<br />";
      $node = $node->next;  //now have $node point to where $node->next is pointing to
    }
    echo "Node value is " . $node->value ."<br />"; //have it print the last node value
  }
$dll = new DoublyLinkedList(); //creates a new instance of the doubly linked list
$dll->add(5); //should add a new node with the value of 5
$dll->add(7); //should add a new node with the value of 7
$dll->add(10);
var_dump($dll);
/*
$dll->removeAllNodesWithValueOf(7); //should remove all nodes with value of 7
$dll->remove(1); //removes node of position 1
$dll->add(3); //should add a new node with the value of 3
$dll->insert(1, 100); //insert a new node of value 100 in the position 1
$dll->printValues(); //should print all the values in the doubly linked list
*/
?>