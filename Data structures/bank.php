<?php
class Bank{
    private $acc_no;
    private $acc_holder;
    private $balance;
    private static $acc_no_generator=112233;
    public function __construct($acc_no=self::$acc_no_generator,$acc_holder='abc',$balance=2000){
        $this->acc_no=$acc_no;
        $this->acc_holder=$acc_holder;
        $this->balance=$balance;
        self::$acc_no_generator++;
    }
public function __get($property)
{
  if(property_exists($this,$property)){
      return $this->$property;
  }  
}

public function __set($property, $value)
{
    if(property_exists($this,$value)){
        $this->$property=$value;
    }
    return $this;
}
 public function debit($rupees){
  if($this->balance<$rupees){
        return -1;
  }else{
      echo $rupees ."debited Successfully<br> ";
      echo "Now Your Balance is $this->balance-$rupees";
  }
  $this->balance=$this->balance-$rupees;
 }
public function credit($rupees){
    $this->balance=$rupees;
    echo $rupees ."credited Successfully<br>";
    echo "Total balance is $this->balance";
}

}
$person1=new Bank(self::$acc_no_generator,'Allen',5000);
$person2=new Bank(self::$acc_no_generator,'Scott',2500);
$person3=new Bank(self::$acc_no_generator,'King',4000);
rsort($acc_name);

?>