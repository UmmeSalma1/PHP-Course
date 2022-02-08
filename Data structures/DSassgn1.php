<h3>1. Find the maximum and minimum element in an array.</h3>
<?php
$a = array(5, 6, 7, 3, 8, 9);
$max = $a[0];
for ($i = 1; $i < count($a); $i++) {
    if ($b < $a[$i]) {
        $b = $a[$i];
    }
}
echo $b;
echo '<hr>';
?>
<h3>2. WAP to reverse an array</h3>
<?php
$a = array(5, 6, 7, 3, 8, 9);
function swap($a, $b)
{
    $c = $a;
    $a = $b;
    $b = $c;
}
$n = count($a);
print_r($a);
echo '<br><br>';
for ($i = 0; $i < $n / 2; $i++) {
    $temp = $a[$i];
    $a[$i] = $a[$n - $i - 1];
    $a[$n - $i - 1] = $temp;
}
for ($i = 0; $i < $n; $i++) {
    echo $a[$i] . " ";
}
echo '<hr>';
?>
<h3>3. WAP to find an element in an array.</h3>
<?php
$a = array(5, 6, 7, 3, 8, 9);
$value = 9;
function Search($a, $key)
{

    foreach ($a as $value) {
        if ($value === $key) {
            return true;
        }
    }
    return false;
}
if (Search($a, $value)) {
    echo "$value Present <hr>";
} else {
    echo "Not Present <hr>";
}
?>
<h3>4. WAP to delete a key at a given position in a linked list.</h3>
<?php
$a = array(5, 6, 7, 3, 8, 9);
$pos = 2;
for ($i = $pos - 1; $i < count($a) - 1; $i++) {
    $a[$i] = $a[$i + 1];
}
array_pop($a);
print_r($a);
echo "<hr>";
?>
<h3>5. WAP to find the length of a linked list.</h3>
<?php
//class for creating the node 
class Node
{
    public $data;
    public $next;
    public function __construct($value)
    {
        $this->data = $value;
        $this->next = null;
    }
}
//class for creating the List with function
class LinkList
{
    public $head = null;

    // static variable to get number of nodes in List
    private static $numberOfNodes = 0;

    // function to find the number of nodes 
    public function numberOfNodes()
    {
        echo "The number of nodes is : ".self::$numberOfNodes;
    }

    public function insertAtFirst($Item)
    {  /*Condition for the empty list */
        if ($this->head === null) {
            $this->head = new Node($Item);
        } else { /*condition for non-empty list*/
            $temp = new Node($Item);
            $temp->next = $this->head; //new node contain the address to second node 
            $this->head = $temp; //point head to first node 
        }
        self::$numberOfNodes++;
    }

    public function insertAtLast($Item)
    {
        if ($this->head === null) { // if the linked list is empty
            $this->head = new Node($Item);
        } else { // when the linked list is non-empty
            $current = $this->head;

            while ($current->next != null) {
                $current = $current->next;
            } // after while loop terminates, current points to the last Node
            $current->next = new Node($Item);
        }
        self::$numberOfNodes++;
    }

    public function InsertAtGivenPossition($Item, $position)
    {
        $node = new Node($Item);
        if ($position < 1 || $position >= self::$numberOfNodes + 1) {
            echo "Invalid Possition";
        } else if ($position == 1) {
            $node->next = $this->head;
            $this->head = $node;
        } else {
            //   node privious to possition
            $temp = new Node($Item);
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }

            //5. If the previous node is not null, make 
            //   newNode next as temp next and temp next 
            //   as newNode.
            if ($temp != null) {
                $node->next = $temp->next;
                $temp->next = $node;
            } else {

                //6. When the previous node is null
                echo "\nThe previous node is null.";
            }
        }
        self::$numberOfNodes++;
    }
    
    
    public function deleteByValue($item)
    {
        $current = $previous = $this->head;

        while ($current->data != $item) {
            $previous = $current;
            $current = $current->next;
        }

        // if you are deleting the first node of the linked list
        if ($current == $previous) {
            $this->head = $current->next;
        }

        $previous->next = $current->next;

        self::$numberOfNodes--;
    }

    public function search($item){
        if($this->head==null){
            echo "List is empty ";
        }
        else{
            $node=$this->head;
            while($node!=null){
                if($node->data==$item){
                    echo $item ." is Found in Link List ";
                    echo "<hr>";
                    break;
                }
                $node=$node->next;
            }
        }
    }

    public function printList()
    {
        $items = [];
        $current = $this->head;
        while ($current != null) {
            array_push($items, $current->data);
            $current = $current->next;
        }

        $str = '';
        foreach ($items as $item) {
            $str .= $item . '->';
        }

        echo $str;
    }
    
    
}
$linklist = new LinkList();

$linklist->insertAtFirst(20);
$linklist->insertAtLast(40);
$linklist->InsertAtGivenPossition(21,1);
$linklist->InsertAtGivenPossition(22,1);
$linklist->InsertAtGivenPossition(23,3);
$linklist->InsertAtGivenPossition(24,1);
$linklist->InsertAtGivenPossition(25,1);

//$linklist->deleteByPosition(3);

$linklist->numberOfNodes();

// $linklist->printList();
?>
<h3>6. WAP to search an element in a linked list.</h3>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$linklist->printList();
$linklist->search(40);

echo "<hr>"

?>
<h3> 7. WAP to reverse of a stack</h3>
<?php
// Reverse a number using stack

// Stack Node
class StackNode
{
public $data;
public $next;
public function __construct($data, $top)
{
$this->data = $data;
$this->next = $top;
}
}
class MyStack
{
public $top=NULL;
public $count;
// public function __construct()
// {
// $this->top = NULL;
// $this->count = 0;
// }
// Returns the number of element in stack
public function size()
{
return $this->count;
}
public function isEmpty()
{
if ($this->size() > 0)
{
return false;
}
else
{
return true;
}
}
// Add a new element in stack
public function push($data)
{
// Make a new stack node
// And set as top
$this->top = new StackNode($data, $this->top);
// Increase node value
$this->count++;
}
// Add a top element in stack
public function pop()
{
$temp = 0;
if ($this->isEmpty() == false)
{
// Get remove top value
$temp = $this->top->data;
$this->top = $this->top->next;
// Reduce size
$this->count--;
}
return $temp;
}
// Used to get top element of stack
public function peek()
{
if (!$this->isEmpty())
{
return $this->top->data;
}
else
{
return 0;
}
}
}
echo "<hr>";
?>
<h3>8.WAP to implement a circular queue.</h3>
<?php 
class Queue {
    private $data;
    private $size;
    private $front;
    private $rear;

    //Construction for the queue 
    public function __construct($size){
        $this->size = $size;
        $this->data = array();
        $this->front = -1;
        $this->rear = -1;
    }

    //insert the element in Queue at last 
    public function enqueue($element) {
        if ($this->isfull()){
        throw new Exception("Error: Queue is full");
        }
        else if ($this->isempty())
        {
            $this->front = $this->rear = 0;
        }
        else {
            $this->rear = ($this->rear + 1) % $this->size;
        }
        $this->data[$this->rear] = $element;
    }

    //Delete the element from the queue at first   
    public function dequeue() 
    {
        if ($this->isempty()) 
        {
            throw new Exception("Error: Queue is empty");
        }
        else if ($this->front == $this->rear) 
        {
            $this->front = $this->rear = -1;
        }
        echo "The Dequeue is : ".$this->data[$this->front];      
        $this->front = ($this->front + 1) % $this->size;  
    }
    

    public function isfull() {
        if ($this->front == (($this->rear+1) % $this->size)){
        return true;
        }
        return false;
    }
    
    public function isempty() 
    {
        if ($this->front == -1 && $this->rear == -1)
        {
            return true;
        }
        return false;
    }
    
    public function print() 
    {
        $f = $this->front;
        $r = $this->rear;
        
        while (true) 
        {
            echo "Index: $f, Value: ".$this->data[$f];
            echo "<br>";
            $f = ($f + 1) % $this->size;
            
            if ($f == (($r + 1) % $this->size))
            echo "<hr>";
            break;
        }
    }
}

$queue = new Queue(6);
$queue->enqueue(1);
$queue->print();
$queue->enqueue(12);
$queue->print();
$queue->enqueue(0);
$queue->print();
$queue->enqueue(7);
$queue->print();
$queue->enqueue(01);
$queue->print();
$queue->dequeue();
$queue->print();
$queue->dequeue();
$queue->print();
$queue->dequeue();
$queue->print();
$queue->enqueue("Umme");
$queue->print();
$queue->enqueue("Salma");
$queue->print();
$queue->enqueue("Rifa");
$queue->print();

echo "<hr>";
?>
<h3>9.WAP to implement a doubly linked list.</h3>
<?php
class DoublyLinkList{

    public $header=null;

    public static $numberOfNodes = 0;

    public function insertNodeAtFirst($item){
        $newNode=new Node($item);
        if($this->header==null){
            $this->header=$newNode;
        }
        else{
            $this->header->pre = $newNode;
            $newNode->next = $this->header;
            $this->header = $newNode;
        }
        self::$numberOfNodes++;
    }

    public function insertNodeAtLast($item){
        $newNode=new Node($item);
        if($this->header==null){
            $this->head = $newNode;
        }
        else{
            $node=$this->header;
            while($node->next!=null){
                $node=$node->next;
                $node->pre = $node;
            }
            $newNode->pre=$node;
             $node->next=$newNode;

        }
        self::$numberOfNodes++;
    }
    
    public function insertNodeAtGivenPosition($Item, $position)
    {
        $newnode = new Node($Item);
        //if possition is incorrect
        if ($position < 1 || $position >= self::$numberOfNodes + 1) {
            echo "Invalid Possition because total list size is ".self::$numberOfNodes.'<br>';
        } 
        else if ($position == 1) 
        {
            $newnode->next = $this->header;
            $this->header->pre=$newnode;
            $this->header = $newnode;
        }
        //   node at after 1st possition 
        else {
            $node = $this->header;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($node != null) {
                    $node = $node->next;
                }
            }
            if ($node->next != null) {
                $newnode->next = $node->next;
                $node->next = $newnode;
            } 
            else {
                //6. When the previous node is null
                $node->next=$newnode;
            }
        }
        self::$numberOfNodes++;
    }

    function deleteAtFirst(){
        if($this->head==null){
            echo "The list already Empty";
        }
        else{
            $current=$this->header;
            $this->header->next->pre=null;
            $this->header=$this->header->next;
            
            $current=null;
        }
        self ::$numberOfNodes--;
    }
    public function deleteAtLast()
    {
        if($this->header != null) {
            if($this->header->next == null) {
              $this->header = null;
              echo "Empty List";
            } 
            else {
            //   $temp = new Node();
              $node = $this->header;
              while($node->next->next != null){
                $temp = $node->next;
              }
              $lastNode = $node->next;
              $lastNode->pre=null;
              $temp->next = null; 
              $lastNode = null;
            }
          }
          else{
              echo "List Already Empty";
          }
        
          self::$numberOfNodes--;
    }

    public function deleteAtGiven($position){
        if($this->header!=null){
                if($position>=1 && $position<=self::$numberOfNodes){
                    $previoustarger= $this->header;
                    $target = $this->header;

                    if($position==1){
                        $delete=$this->header;
                        $this->header=$this->header->next;
                        $this->header->pre=null;
                        $delete=null;
                    }
                    for($i=1;$i<$position-1;$i++){
                        $previous=$target;
                        $target=$target->next;
                    }

                   $delete = $target;
                   $target->next=$target->next->next;
                   $previous->next=$target->next;
                   $target->pre=$previous;
                   $delete=null;
                   self::$numberOfNodes--;
                }
                else{
                    echo "The possition is Incorrect you have only ". self::$numberOfNodes." Node";
                }
        }
    }

    public function update($Item,$position){
        // $node = new Node($Item);
        if ($position < 1 || $position >= self::$numberOfNodes +1) {
            echo "Invalid Possition";
        } else if ($position == 1) {
            $this->head->data=$Item;
        } else {
            //   node privious to possition
            $temp = new Node($Item);
            $temp = $this->head;
            for ($i = 1; $i < $position - 1; $i++) {
                if ($temp != null) {
                    $temp = $temp->next;
                }
            }

                $temp->next->data=$Item;
            
        }
    }
    
    public function deleteByValue($item)
    {
        $current = $previous = $this->head;

        while ($current->data != $item) {
            $previous = $current;
            $current = $current->next;
        }

        // if you are deleting the first node of the linked list
        if ($current == $previous) {
            $deleteNode = $current;
            $this->head = $current->next;
            $deleteNode=null;
        }
        $current->next->pre=$previous->next;
        $previous->next = $current->next;

        self::$numberOfNodes--;
    }

    
    public function printList(){
        $node=$this->header;
        while($node!=null){
            echo $node->data ."<->";
            $node=$node->next;
        }
    }

    public function numberOfNode(){
        echo "The number of Nodes is : ".self::$numberOfNodes;
    }
}

$doublyList=new DoublyLinkList();
$doublyList->insertNodeAtFirst(5);
$doublyList->insertNodeAtFirst(4);
$doublyList->insertNodeAtFirst(3);
$doublyList->insertNodeAtLast(6);
$doublyList->insertNodeAtFirst(2);
$doublyList->insertNodeAtGivenPosition(2,5);
$doublyList->insertNodeAtFirst(1);
$doublyList->printList();

echo "<hr>";
?>
<h3>10.WAP to implement a priority queue.</h3>
<?php
class PnQueue
{
    protected $queue = array();

    public function __constructor(){

    }
   
    public function push($item, $priority = 0)
    {
        if (!is_numeric($priority)) {
            throw new Exception('Numeric priority value expected');
        }
        isset($this->queue[$priority]) || $this->queue[$priority] = array();
        array_push($this->queue[$priority], $item);
        ksort($this->queue);
        return $this;
    }
    
   
    public function pop($priority = null)
    {
        // Get the first message from the first priority queue
        if (null === $priority) {
            reset($this->queue);
            $priority = key($this->queue);
        }
        
        if (is_numeric($priority) && isset($this->queue[$priority])) {
            // Avoiding array_shift() since it requires a re-index process
            // on the array and it may be slower for large collections of items
            $item = array_pop(array_reverse($this->queue[$priority]));
            unset($this->queue[$priority][key($this->queue[$priority])]);
   
            // Remove priority queue if it's empty
            if (empty($this->queue[$priority])) {
                unset($this->queue[$priority]);
            }
            
            return $item;
        }
        return null;
    }
    
    
    public function purge($priority = null)
    {
        if (null === $priority) {
            $this->queue = array();
        } elseif (is_numeric($priority) && isset($this->queue[$priority])) {
            $this->queue[$priority] = array();
        }
    }
    
    
    public function count($priority = null)
    {
        switch ($priority) {
            case null:
                $count = 0;
                foreach ($this->queue as $priorityQueue) {
                    $count += count($priorityQueue);
                }
                return $count;
            case (is_numeric($priority) && isset($this->queue[$priority])):
                return count($this->queue[$priority]);
            default:
                return 0;
        }
    }
    
    
    public function dump($priority = null)
    {
        if (null === $priority) {
            return $this->queue;
        } elseif (is_numeric($priority) && isset($this->queue[$priority])) {
            return $this->queue[$priority];
        }
        return null;
    }

}
$obj = new PnQueue();
$obj->push(5);
echo $obj->pop();
?>