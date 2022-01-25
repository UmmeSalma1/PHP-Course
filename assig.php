<?php
$a=array("a"=>"hii","b"=>"hello","c"=>"welcome");
print_r($a);
print_r(array_reverse($a));
?>


<?php
$stack = new Stack(4);
$stack1 = new Stack(4);

$stack->push(10);
$stack->push(20);
$stack->push(30);
$stack->push(40);

$stack->printStack();

echo "<br>";

$stack1->push($stack->pop());
$stack1->push($stack->pop());
$stack1->push($stack->pop());
$stack1->push($stack->pop());

$stack1->printStack();
?>

<?php
class stack{
public $arr;
public $stack;

public function __construct()
{   
    $this->stack=array();
}

public function solve($exp){
    for($i=0;$i<strlen($exp);$i++){
        if($exp[$i]>='0' && $exp[$i]<='9'){
            $this->ans.=$exp[$i];
        }
        else if($exp[$i]=='(')
            array_unshift($this->stack,$exp[$i]);
        else if($exp[$i]=='+' || $exp[$i]=='-' || $exp[$i]=='*' || $exp[$i]=='/'){
            array_unshift($this->stack,$exp[$i]);

        }
        elseif($exp[$i]==')'){
            while(current($this->stack)!='('){
                $this->ans.=current($this->stack);
                array_shift($this->stack);
            }
            array_shift($this->stack);
        }
    }
    echo $this->arr;
}
}
$stk=new stack();
$exp='(2-3*5)';
$stk->solve($exp);

?>

//////////////
<?php
class stack{
public $arr;
public $stack;

public function __construct()
{   
    $this->stack=array();
}

public function solve($exp){
    for($i=0;$i<strlen($exp);$i++){
        if($exp[$i]>='0' && $exp[$i]<='9'){
            $this->ans.=$exp[$i];
        }
        else if($exp[$i]=='(')
            array_unshift($this->stack,$exp[$i]);
        else if($exp[$i]=='+' || $exp[$i]=='-' || $exp[$i]=='*' || $exp[$i]=='/'){
            array_unshift($this->stack,$exp[$i]);

        }
        elseif($exp[$i]==')'){
            while(current($this->stack)!='('){
                $this->ans.=current($this->stack);
                array_shift($this->stack);
            }
            array_shift($this->stack);
        }
    }
    echo $this->arr;
}
}
$stk=new stack();
$exp='(2-3*5)';
$stk->solve($exp);

?>