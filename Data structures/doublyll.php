<?php
/**
* Class to represent a node of the linked list
*/
class Node {
public $data;
public $next;
public $prev;

public function __construct($item) {
$this->data = $item;
$this->next = null;
$this->prev =null;
}
}

/**
* Class to represent a linked list
*/
class MyDoublyLinkedList
{
public $head = null; // instance variable

private static $count = 0; // static variable

/**
* Getter function for count of nodes
*
* @return int
*/
public function getCount() {
return self::$count;
}

/**
* Insertion at the beginning of the linked list
*
* @param mixed $newItem
* @return void
*/
public function insertAtFirst($newItem) {
    $node = new Node($newItem);
    // if List is empty make the node as head
    if($this->head == null) {
    $this->head = $node;
    }
    else {
    $this->head->prev = $node;
    $node->next = $this->head;
    $this->head = $node;
    }
    self::$count++;
}

public function insertAtLast($newItem) {
if ($this->head === null) { // if the linked list is empty
$this->head = new Node($newItem);
} else { // when the linked list is non-empty
$current = $this->head;


while ($current->next != null)
{
$current = $current->next;
} // after while loop terminates, current points to the last Node

$current->next = new Node($newItem);
}

self::$count++;
}

public function delete($item) {
$current = $previous = $this->head;

while($current->data != $item) {
$previous = $current;
$current = $current->next;
}

// if you are deleting the first node of the linked list
if($current == $previous) {
$this->head = $current -> next;
}

$previous->next = $current->next;

self::$count--;
}

public function printList() {
$items = [];
$current = $this->head;
while($current != null) {
array_push($items, $current->data);
$current = $current->next;
}
//$current=$current->prev;
$str = '';
foreach ($items as $item) {
$str .= $item . '<->';
}

echo $str;
echo PHP_EOL;
}
}

$my_list = new MyDoublyLinkedList();

$my_list->insertAtFirst(20);
$my_list->insertAtLast(40);
$my_list->printList();
?>