<?php
/*  *
    * *
    * * *
    * * * *
    * * * * *   */
for($i=0; $i<5; $i++){
    for($j=0; $j<=$i;$j++){
        echo "* ";
        echo "<br>";
        }
}
?>
<?php
/*          *
          * *
        * * * 
      * * * *
    * * * * *   */
$num=5;
for($i=0; $i<=$num; $i++){
    for($j=1; $j<=$num-$i;$j++){
        echo " ";
    }
    for($k=0; $k<=$i; $k++){
        echo "*";
    }
        echo "<br>";
}
?>
<?php
function exp($n,$p)
{
    if($p==0)
    {
        return 1;
    }
    else
    {
        return $n * exp($n,$p-1);
      }
}
echo exp(2,3);
?> 

<?php
//by akash
function printRightAngledTrianglePattern($n)
{
for ($i = 0; $i < $n; $i++) {
for ($j = $i; $j < $n - 1; $j++) {
print(" ");
}
for ($k = 0; $k <= $i; $k++) {
print("* ");
}
print(PHP_EOL);
}
}

printRightAngledTrianglePattern(5);
?>
<?php
/*$a=array(2,9,4,10,15,32);
$n=count($a); 
for($i=0; $i<$n; $i++){
    for($j=0; $j<$n-$i-1; $j++){
        if($a[$j]>$a[$j+1])
        {
            $temp=$a[$j];
            $a[$j]=$a[$j+1];
            $a[$j+1]=$temp;
        }
        }    
}
foreach($a as $i=>$v){
    echo $i."=>".$v."<br>";
}*/
$a=array(2,9,4,10,15,32);
$n=count($a); 
for($i=0; $i<$n; $i++){
    for($j=0; $j<$n-$i; $j++){
        if($a[$j]>$a[$j+1])
        {
            $temp=$a[$j];
            $a[$j]=$a[$j+1];
            $a[$j+1]=$temp;
        }
        }    
}
foreach($a as $v){
    echo " ".$v;
}
?>


<?php
function hcf($a, $b){
    if($a==0)
    return $b;
    if($b==0)
    return $a;
    
    if($a==$b)
        return $a;

    if($a>$b){
        return hcf($a-$b,$b);
    }else{
        return hcf($a, $b-$a);
    }
}
$a=14;
$b=18;
echo hcf($a,$b);
?>