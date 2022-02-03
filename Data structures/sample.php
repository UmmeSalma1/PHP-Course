<?php
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
    public function insertAtLast($newItem) {
        if ($this->head === null) {
        $this->head = new Node($newItem);
        } else { 
        $current = $this->head;
        
        while ($current->next != null)
        {
        $current = $current->next;
        } 
        
        $current->next = new Node($newItem);
        }
?>