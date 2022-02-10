<?php
class myCalculator{
      public $x;
      public $y;
      public function __construct($x,$y){
          $this->x = $x;
          $this->y = $y;
      }
      public function dishplay(){
          echo $this->x;
          echo "<br>";
          echo $this->y;
      }
      public function add(){
          echo $this->x+$this->y;
        }
        public function sub(){
          echo $this->x-$this->y;
          
        }
        public function mul(){
          echo $this->x*$this->y;
          
        }
        public function div(){
          echo $this->x/$this->y;

      }
}
$obj = new myCalculator(12 , 6);
echo "Numbers are: <br>";
$obj-> dishplay();
echo "<br>";
echo "Operations are: <br>";
$obj->add();
echo "<br>";
$obj->sub();
echo "<br>";
$obj->mul();
echo "<br>";
$obj->div();
?>