<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutoria</title>
</head>
<style>
    

    table,td{
        border: 1px solid black;
        border-collapse: collapse;
        
    }
</style>
<body>

<?php
//1.Write a PHP script to get the PHP version and configuration information
//phpinfo();
echo "<hr>";

?>

<?php
//2.Write a PHP script to display the following strings.

echo 'Tomorrow I \'ll learn PHP global variables.<br>';
echo 'This is a bad command : del c:\\*.*';
echo "<hr>";
?>

<?php
//3.$var = 'PHP Tutorial'. Put this variable into the title section, h3 tag and as ananchor text within an HTML document.

echo "<h3>PHP Tutorial</h3>";
echo "<p>PHP, an acronym for Hypertext Preprocessor, is a widely-used open sourcegeneral-purpose scripting language. It is a cross-platform, HTML embeddedserver-side scripting language and is especially suited for web development</p>";
echo '<a href="https://www.w3schools.com/php/">Go to the PHP Tutorial</a>';
echo "<hr>";
?>

<?php
//4.Create a simple HTML form and accept the user name and display the namethrough PHP echo statement.
?>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
<input type="text" id="t1" placeholder="Enter your Name" name="t1" required>
<input type="submit" value="Submit"><br>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['t1'];
    echo $name;

}

echo "<hr>";
?>

<?php
//5.Write a PHP script to get the client IP address.

$a=$_SERVER['REMOTE_ADDR'];
echo $a;

echo "<hr>";
?>

<?php

//6.Write a simple PHP browser detection script

echo $_SERVER ['HTTP_USER_AGENT'];

echo "<hr>";

?>

<?php
//7.Write a PHP script to get the current file name.
echo $_SERVER['PHP_SELF'];
echo "<hr>";
?>

<?php
//8.Write a PHP script, which changes the color of the first character of a word.

$text = 'PHP Tutorial';
$text = preg_replace('/(\b[a-z])/i','<span style="color:red;">\1</span>',$text);
echo $text;
echo "<hr>";
?>

<?php
//9.Write a PHP script, to check whether the page is called from 'https' or 'http'.

if (!empty($_SERVER['HTTPS'])){
    echo "page is called from HTTPS";
}
else{
    echo "page is called from HTTP";
}
echo "<hr>";

?>

<?php
//10.Write a simple PHP program to check that emails are valid.
$mail = "mail@example.com";
$wrongmail= "mail example com";
if (filter_var($mail, FILTER_VALIDATE_EMAIL)) 
{
     echo '"' . $mail . '" is Valid'."<br>";
}
else 
{
     echo '"' . $mail . '" is Invalid'."<br>";
}
if (filter_var($wrongmail, FILTER_VALIDATE_EMAIL)) 
{
     echo '"' . $wrongmail . '" is Valid'."<br>";
}
else 
{
     echo '"' . $wrongmail . '" is Invalid'."<br>";
}

echo "<hr>";
?>

<?php
//11.Write a e PHP script to display string, values within a table.


echo "<table>";         
echo "<tr>";

echo "<td style='color:blue'>Salary of mr,A is</td>";

echo "<td>1000$</td>";
echo "</tr>";
echo "<tr>";

echo "<td style='color:blue'>Salary of mr,B is</td>";

echo "<td>1200$</td>";
echo "</tr>";
echo "<tr>";

echo "<td style='color:blue'>Salary of mr,C is</td>";

echo "<td>1400$</td>";
echo "</tr>";
echo "</table>";
echo "<hr>";

?>

<?php
//12
//show_source("1.php");

?>

<?php
//13.Write a PHP script to count number of lines in a file.

$file = fopen("/home/me/Desktop/file/test.txt", "r");

$count=0;
while(! feof($file)) {
  $line = fgets($file);
  echo $line. "<br>";
  if(preg_match("/\n/",$line)){
      $count++;
  }
  

}
echo "No of files present in file".$count;

fclose($file);

echo "<hr>";

?>

<?php

//14.Write a PHP script to print current PHP version
echo "current php  version is ".phpversion();
echo "<hr>";
?>


<?php
//15.Write a PHP script to delay the program execution for the given number ofseconds.
echo "I AM HERE.<br>".date('h:i:s')."<br>";
sleep(1);
echo "I came now.<br>".date('h:i:s');
echo "<hr>";
?>

<?php
//16.Arithmetic operations on character variables : $d = 'A00'. Using this variableprint the following numbers.
$d = 0;

for($i=0;$i<5;$i++){
    $d++;
   echo "A0".$d."<br>";
}
echo "<hr>";

?>

<?php
//17.Write a PHP script to get the last occurred error.
echo print_r(error_get_last());
echo "<hr>";
?>

<?php
//18.Write a PHP script to get the full URL.

echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo "<hr>";


?>

<?php
//19.Write a PHP script to compare the PHP version.Note : Use version_compare() function and PHP_VERSION constant.
echo phpversion()."is my current version<br>";
$c=7.0;
if(version_compare(phpversion(),$c)){
    echo phpversion()."is grater than".$c;
}
else{
    echo $c."is grater than".phpversion();
}
echo "<hr>";
?>

<?php
//20.Write a PHP script to get the document root directory under which the currentscript is executing, as defined in the server's configuration file.

echo getenv('DOCUMENT_ROOT');
echo "<hr>";
?>

<?php
//21.Write a PHP script to get the information about the operating system PHP isrunning on.
echo "we are useing it on ".php_uname()."\n";
echo "<hr>";
?>

<?php
//22.Write a PHP script to get the directory path used for temporary files.
echo "name=".sys_get_temp_dir();
echo "<hr>";
?>

<?php
//23.Write a PHP script to get the time of the last modification of the current page
echo "Its modified on".date("F d Y H:i:s.",getlastmod());
echo "<hr>";
?>

<?php
//24.Write a PHP program to swap two variables.
$a=1;
$b=2;
echo "before<br> a=".$a."<br>b=".$b."<br>";
$temp=$a;
$a=$b;
$b=$temp;
echo "after<br> a=".$a."<br>b=".$b."<br>";
echo "<hr>";
?>
  
</body>
</html>