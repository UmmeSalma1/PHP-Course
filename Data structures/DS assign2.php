<h3>1. Factorial of a Number Using Recursion</h3>
<?php
function factorial($n)
{
    if ($n <= 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}
$n = 5;
echo "The factorial of $n is : " . factorial($n);
echo "<hr>";
?>

<h3>2.Fibonacci numbers </h3>
<?php
function fibonacci($n)
{
    $F = array();
    for ($i = 0; $i < 100; $i++) {
        $F[$i] = -1;
    }
    if ($n <=1) {
        $F[$n] = $n;

        return $n;
    } 
    else 
    {
        if ($F[($n - 1)] == -1)
        $F[$n - 1] = fibonacci($n - 1);

        if ($F[($n - 2)] == -1)
        $F[$n - 2] = fibonacci($n - 2);
        $F[$n] = $F[$n - 2] + $F[$n - 1];

        return $F[$n - 1] + $F[$n - 2];
    }
    
}

$n = 5;
echo fibonacci($n);
echo "<hr>";
?>

<h3>3. Recursive program to check if number is palindrome or not</h3>
<?php
function palindrome($num){
    static $temp=0;
   
    if($num==0){
        return $temp;
    }
    else{
        $temp= ($temp*10) + (int)($num%10);
        $num=(int)$num/10;
    }
    return Palindrome($num);
}
function isPalindrome($str,$start,$end){
if($start>=$end){
    echo "$str is palindrome<br>";
    return true;
}
if($str[$start]!=$str[$end-1]){
    echo "The $str is not palindrome<br>";
    return false;
}

return isPalindrome($str,$start+1,$end-1);
}
isPalindrome($str,0,strlen($str));

$n=121;
$m=Palindrome($n)/10;
if($n===$m){
    echo "The number $n is Palindrome";
}
else{
    echo "The number $n is not palindrome";
}
echo '<hr>';
$str = (string)$n;
echo "Converting String ";
isPalindrome($str,0,strlen($str));
echo "<hr>";
?>

<h3>4. Print all possible strings of length k that can be formed from a set of n characters</h3>
<?php

echo "<hr>";
?>

<h3>5. Linear search using recursion</h3>
<?php
function linearSearch($arr,$arraySize,$keySearch){
    if($arraySize==0){
        echo "$keySearch Present";
        return false;
    }
    else if($arr[$arraySize]==$keySearch){
        echo "$keySearch at index : ". $arraySize+1;
        return true;
    }
    else{
        return linearSearch($arr,$arraySize-1,$keySearch);
    }
}
$arr=Array(2,4,6,7,8,9,0,10);
$key=6;
linearSearch($arr,count($arr),$key)

?>