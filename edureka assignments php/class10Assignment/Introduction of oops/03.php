<?php

Class example
{

  public $integer;

  public function __construct($x)
  {
    if($x<0)
      {
            echo "Please enter the positive number";
            exit;
      }

      $this->integer = $x;
    }

 function factorial()
  {
    $factorial = 1;
    for($i = 1; $i<= $this->integer; $i++) 
     {
       $factorial = $factorial *$i;
     }
   return $factorial;
  }
}
$obj = new example(4);
echo $obj->factorial();
?>