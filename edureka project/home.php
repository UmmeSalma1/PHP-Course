<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  margin: 0;
}

@import url('https://fonts.googleapis.com/css2?family=Mochiy+Pop+P+One&display=swap');
h1{
    text-align: center;
    color: rgb(238, 104, 27);
    font-style: italic;
    font-family: 'Mochiy Pop P One', sans-serif;
}
.hero-image {
  background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("https://gineersnow.com/wp-content/uploads/2021/05/The-Business-of-Cold-Room-temperature-control-climate-control-HVAC-covid-19-warehouse-storage-supply-chain-logistics-pharmaceutical-forklift-light-bulb.jpg");
  height: 100%;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: rgb(238, 104, 27);
}

.hero-text button {
  outline: 0;
  display: inline-block;
  padding: 10px 25px;
  color: white;
  background-color: rgb(238, 104, 27);
  text-align: center;
  cursor: pointer;
  font-weight: bold;
  font-family: 'Times New Roman', Times, serif;
  font-size: 30px;
}

.hero-text button:hover {
  background-color:red;
  color: white;
}

</style>
</head>
<body>
<?php
require_once("nav.php");
?>
<div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:50px">Cold Storage Management System</h1>
    <form action="bookings.php" method="post">
    <button ><a class="active" href="bookings.php"></a>Bookings</button>
  </form>
  </div>
</div>

</body>
</html>
