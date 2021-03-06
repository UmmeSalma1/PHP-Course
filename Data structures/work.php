<h3>WAP to deleting an element at kth index in a array.</h3>
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
<h3>WAP for inserting an element at the given kth possition in a linklist.</h3>

<?php
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
    
    public function update($Item,$position){
        $node = new Node($Item);
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
            $this->head = $current->next;
        }

        $previous->next = $current->next;

        self::$numberOfNodes--;
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
        echo '<hr>';
    }

}
$linklist = new LinkList();

$linklist->insertAtFirst(20);
$linklist->insertAtLast(40);
$linklist->InsertAtGivenPossition(21,1);
$linklist->InsertAtGivenPossition(22,1);
$linklist->InsertAtGivenPossition(23,3);
$linklist->InsertAtGivenPossition(24,1);
$linklist->InsertAtGivenPossition(25,4);
echo "21 insert in 1st possition<br>";
echo "22 insert in 1st possition<br>";
echo "23 insert in 3rd possition<br>";
echo "24 insert in 1st possition<br>";
echo "25 insert in 4th possition<br>";
$linklist->printList();
//$linklist->update(1,5);
// $linklist->printList();

echo '<hr>';



?>
<h3>Write a program for updating the value on given index</h3>

<?php

$linklist->printList();
$linklist->update(1,5);
$linklist->printList();

echo '<hr>';
?>