<body>
<h3>Find the maximum and minimum element in an array</h3>
<?php
$array = array(1, 2, 3, 4, 5);
echo(max($array));
echo("\n");
echo(min($array));
?>
<?php
// Returns maximum in array
function getMax($array)
{
   $n = count($array);
   $max = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;      
}
 
// Returns maximum in array
function getMin($array)
{
   $n = count($array);
   $min = $array[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;      
}
 
// Driver code
$array = array(1, 2, 3, 4, 5);
echo(getMax($array));
echo("\n");
echo(getMin($array));
?>
echo "<hr>";

<h3>WAP to reverse an array.</h3>
<?php
//using iteration
function reverse($MyNum){
  $RevNum = 0;
  $remainder;

  while($MyNum > 1){
    $remainder = $MyNum % 10;
    $MyNum = (int)$MyNum / 10;
    $RevNum = $RevNum * 10 + $remainder;
  }
  return $RevNum;
}

$x = 1285;
$y = 4567;
echo "Reverse of $x is: ".reverse($x);
echo "\nReverse of $y is: ".reverse($y);
?>
<?php
// using recursion
$RevNum = 0;
$base = 1;

function reverse($MyNum){
  global $RevNum;
  global $base;

  if($MyNum > 1){
    reverse((int)$MyNum/10);
    $RevNum += $MyNum % 10 * $base;
    $base *= 10;
  }
  return $RevNum;
}

$x = 7902;
echo "Reverse of $x is: ".reverse($x);
?>
echo "<hr>";
<h3>WAP to find an element in an array.</h3>


</body>