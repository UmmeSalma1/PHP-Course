<?php
$server="localhost";
$user="root";
$pass="";
$db="db_connection.php";


$con =mysqli_connect("$server","$user","$pass","$db");

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $sql="INSERT INTO `email` (`name`, `email`, `mess`) VALUES ('$name', '$email', '$message')";

    $res=mysqli_query($con,$sql);
    if($res){
        echo  "<div class='alert alert-success alert-dismissible fade show' role='alert'>
  <strong>Successful!</strong> your email and password has been submitted.
  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";
    }

}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>FORM</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">FORM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
      
    </div>
  </div>
</nav>

<div class="container mt-3" >
    <h1>ENTER YOUR DATA</h1>
<form action="db_connection.php"method="post">
<div class="mb-3">
    <label for="exampleInputName"  class="form-label">Name</label>
    <input type="name" name="name" class="form-control" id="exampleInputname" aria-describedby="nameHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Well never share your email with anyone else.</div>
  </div>


  <div class="mb-3">
    <label for="exampleInputMessage"  class="form-label">Message</label>
    <input type="message" name="message" class="form-control" id="exampleMessage">
  </div>


  <select class="form-select" aria-label="Default select example">
  <option selected>Add your Query</option>
  <option value="1">Login issue</option>
  <option value="2">IP issue</option>
  <option value="3">Data Error</option>
    </select>
  <br><br>
  <button type="submit" name="submit" value="Submit" class="btn btn-outline-dark">Submit</button>
  <a href="b.php"><button style="float:right" type="button"class="btn btn-outline-dark" style=" ">View List</button></a>
</form>
</div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>