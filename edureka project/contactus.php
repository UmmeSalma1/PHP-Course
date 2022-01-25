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
$fName = $_POST['firstname'];
$lName = $_POST['lastname'];
$country = $_POST['country'];
$subject = $_POST['subject'];
$query="INSERT INTO db_contact (`First_Name`,`Last_Name`,`Country`,`Subject`) VALUES ('$fName','$lName','$country','$subject');";
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
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container1 {
  border-radius: 5px;
  background-color: rgb(73, 68, 66);
  color: white;
  font-weight: bold;
  font-style: italic;
  font-family: 'Times New Roman', Times, serif;
  padding: 20px;
  width: 700px;
  height: fit-content;
  float: left;
  margin-left: 123px;
}
@import url('https://fonts.googleapis.com/css2?family=Kings&family=Reggae+One&display=swap');
h1{
    text-align: center;
    color: rgb(139, 77, 115);
    font-style: italic;
    font-family: 'Reggae One', cursive;
}
.body1{
  background-image: url("https://gineersnow.com/wp-content/uploads/2021/05/The-Business-of-Cold-Room-temperature-control-climate-control-HVAC-covid-19-warehouse-storage-supply-chain-logistics-pharmaceutical-forklift-light-bulb.jpg");
  background-color: #cccccc; 
  height: 1000px; 
  background-position: center; 
  background-repeat: no-repeat; 
  background-size: cover;
}
.container2{
    float: right;
    margin-top: 123px;
    margin-right: 123px;
}
</style>
</head>
<body>

<div class="body1">
    <h1>Contact Form</h1>
<div class="container1">
  <form  method="POST">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Enter your first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Enter your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
      <option value="india">India</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>
<div class="container2">
  <img src="http://www.hardwyn.com/images/contactus.png" width="500"; height="500">
</div>
</div>

</body>
</html>
