
<?php
//Assignments factorial
/*function factorial($n)
{
    if($n<1){
        return 1;
    }else {
        return $n*factorial($n-1);
    }
}
$n=5;
echo "the factorial of ".factorial($n);
?>*/


/* 
$num =6;

function fibonacciNumber($num){  
    if($num == 0){  
    return 0;  
    }else if( $num == 1){  
        return 1;  
    }  else {  
return (fibonacciNumber($num-1) + fibonacciNumber($num-2));  
}   
}  
for ($i = 0; $i < $num; $i++){  
echo fibonacciNumber($i); 
echo ' '; 
} 


//Assignment fibonacci till nth term
function fibonacciNumber($n)
{
    if($n<=1){
        return $n;
    }else{
        return fibonacciNumber($n-1)+fibonacciNumber($n-2) ;
        }
}
$n=6;
echo fibonacciNumber($n); 
echo ' '; 
*/

/*function fibonacciNumber($n)
{
    $a=0; $b=1; $sum=0; $n=6;
    if($n<=1){
        return 1;
    }else{
        echo $a;

        // Create next term
        $sum = $a + $b;
        $a = $b;
        $b = $sum;
    
        // Decrement N
        $n--;
    }
}*/

// palindrome
$n=356; $rem=0; $temp=$n;$a=0;
while($temp){
    $rem=$temp%10;
    $a=($a*10)+$rem;
    $temp=(int)$temp/10;
}
echo $a/10;
if($a==$n){

}
echo "<hr>";
pall($n);
function pall($n){
    $m=$n;
    $result=0;
    while($m>1){
    echo " <br>".$m%10;
    $m=$m/10;
    }
}
echo "<hr>";
//by akash 
// iterative process
//function printDigits($n)
// {
//     while($n>0){
//         $digit=intval($n%10);
//         $n=intval($n/1);
//     }
// }

// recursive process (print 7 5 1) 
function printDigits1($n)
{
    if($n>0){
        printDigits1(intval($n/10));
        $digit=intval($n%10);
        print($digit.PHP_EOL);
        }
    }
    printDigits1(751);

echo "<hr>";

    // recursive process (print 1 5 7) 
function printDigits2($n)
{
if ($n > 0) {
$digit = $n % 10;
print($digit . PHP_EOL);

printDigits2(intval($n / 10));
}
}

printDigits2(751);
// palindrome by akash
function numReverse($n, $rev = 0)
{
if ($n > 0) {
$digit = $n % 10;
$rev = $rev * 10 + $digit;

$rev = numReverse(intval($n / 10), $rev);
}

return $rev;
}

function checkPallindrome($num)
{
$reverse = numReverse($num);

return $num == $reverse ? "Yes" : "No";
}

print("Is 751 pallindrome? " . checkPallindrome(751) . PHP_EOL);
print("Is 141 pallindrome? " . checkPallindrome(141) . PHP_EOL);


echo "<hr>";

$num = 1;
while ( $num <= 10 ) {
  print "$num ";
  $num += 2;
}


function odd($n)
{
    for($i=1; $i<=$n; $i=$i+2){
        echo " ".$i;
    }
}
 ?>


