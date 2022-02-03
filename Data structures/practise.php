
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class Nodes{
    public $data;
    public $next;
    public function __construct($value){
        $this->data=$value;
        $this->next=null;
    }
    
}
class linklist{
    public $head=null;

    public function insertAtFirst($newItem){
        $newNode=new Nodes($newItem);
        if($this->head==null){
            $this->head=$newItem;
        }else{
            $newNode->next=$this->head;
            $this->head=$newNode;
        }

    }


public function printList()
{
// $items = [];
$current=new Nodes(6);
$current = $this->head;
while ($current!= null)
{
// $items[]= $current->data;
echo $current->data;
$current = $current->next;
}
    
// foreach ($items as $item) {
//         echo  $item . '->';
//     }
    // echo "<hr>";
}
}
$list=new linklist();
$list->insertAtFirst("Rifa");
$list->printList();
echo "<br>";
$list->insertAtFirst("Salma");
$list->printList();
echo "<br>";

?>