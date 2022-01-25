<?php
require_once("nav.php")
?>
<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=cold_storage", 'root', '');
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$username = $_POST['user_name'];
$password = $_POST['pass_word'];
$query="INSERT INTO db_contact (`user_name','pass_word') VALUES ('$username','$password');";
$statement = $conn->prepare($query);
$statement->execute();
echo "New record created successfully";
echo "New record created successfully";

}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
    background-image: url("https://gineersnow.com/wp-content/uploads/2021/05/The-Business-of-Cold-Room-temperature-control-climate-control-HVAC-covid-19-warehouse-storage-supply-chain-logistics-pharmaceutical-forklift-light-bulb.jpg");
  background-color: #cccccc; 
  height: 1000px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
.container {
  padding: 16px;
  margin-right: 1000px;
  color: black;
  border: 2px solid black;
  background-color: grey;
  margin-left: 500px ;
  text-align: center;
  min-width: 400px;
  
}
</style>
</head>
<body>
    <div class="container">
    <form action="db_connection.php" method="POST">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>
                <button type="submit">Login</button>
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
            
        </form>
    </div>
</body>
</html>