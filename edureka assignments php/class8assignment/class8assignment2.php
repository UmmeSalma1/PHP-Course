<?php
$server="localhost";
$user="root";
$pass="";
$db="db_connection.php";


$con =mysqli_connect("$server","$user","$pass","$db");
$a="SELECT * FROM `email`";
$b=mysqli_query($con,$a);
$row=mysqli_num_rows($b);


?>


<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <title>Backend</title>

</head>


<body>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Message</th>
    </tr>
  </thead>

  

  <tbody>
        
  <?php
    if($row>0){

    while($row=mysqli_fetch_assoc($b))
    {   
        echo "
        <tr>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['mess']."</td>
        </tr>
             ";

        }
    }

    ?>
    
  </tbody>


</table>
<br>
<a href="db_connection.php"><button   type="button" class="btn btn-outline-dark">Back</button></a>

</body>
</html>