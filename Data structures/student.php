<?php
class Student{
    private $roll_no;
    private $name;
    private $age;
    public function __construct($roll_no=1,$name='xyz',$age=23){
        $this->roll_no=$roll_no;
        $this->name=$name;
        $this->age=$age;
    }

public function getroll_no(){
    return $this->roll_no;
}
public function getname(){
    return $this->name;
}

public function getage(){
    return $this->age;
}
public function setter($roll_no=$this->roll_no,$name=$this->name,$age=$this->age)
 {
    $this->roll_no=$roll_no;
    $this->name=$name;
    $this->age=$age;
 }
 public function __toString()
 {

 }
}
$stu1=new Student(4,'salma',23);
$stu2=new Student(2,'rifa',21);
$stu3=new Student(3,'abc',26);
$arrayroll_no=array($stu1->getroll_no(),$stu2->getroll_no(),$stu3->getroll_no());
$arrayname=array($stu1->getname(),$stu2->getname(),$stu3->getname());
krsort($arrayroll_no);
krsort($arrayname);


?>