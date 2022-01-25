<?php
// WAP to declare an array of 5 numbers.Find the largest number in the array
$a=array(1,2,3,4,5);
$max=$a[0];
for($i=0;$i<5;$i++)
{
if($max<$a[$i])
{
$max=$a[$i];
}
}
echo "largest number: ",$max;
?>

<br>
<?php
// WAP to declare an array of 6 numbers print all the prime numbers in the array
$num = array(1,2,3,4,5,6);
function prime($a)
{
 if($a>1){
  for($i=2;$i<=$a/2;$i++){
   if($a%$i==0){
   return 0;
   }
  }
}
return 1;
}

for($i=1;$i<5;$i++)
{
if (prime($num[$i])) {
echo $num[$i]."<br>";
}
}
?>

<?php
public function insertAtLast($newValue) {
if ($this->head === null) { // if the linked list is empty
$this->head = new Node($newValue);
} else { // when the linked list is non-empty
$current = $this->head;

while ($current->next != null)
{
$current = $current->next;
} // after while loop terminates, current points to the last Node

$current->next = new Node($newValue);
}

self::$count++;
}

public function delete($item) {
  if ($this->head !=null) { // if the linked list is empty
  $this->head = new Node($newValue);
  } else { // when the linked list is non-empty
  $current = $this->head;
  
  /*while ($current->next != null)
  {
  $current = $current->next;
  } // after while loop terminates, current points to the last Node
  
  $current->next = new Node($newValue);
  }*/
  while($this->head != null) {
    $temp = $this->head;
    $this->head = $this->head->next;
    $temp = null;
  }
  
  self::$count++;
  }
?>
