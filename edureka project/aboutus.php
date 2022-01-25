<?php
require_once("nav.php")
?>
<!DOCTYPE html>
<html>
<head>
    <style>
    *{
        margin: 0;
        padding: 0;
        font-family: "Open Sans",sans-serif;
        box-sizing: border-box;
    }
     
    body{
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-image: url("https://assets.telegraphindia.com/telegraph/13regcold.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
     
    .about-section{
        background: url("https://safezone.ind.in/wp-content/uploads/2013/08/aboutUs-banner-img.jpg") no-repeat left;
        background-size: 55%;
        overflow: hidden;
        height: 100%;
        padding: 100px 0;
    }
     
    .inner-container{
        width: 55%;
        float: right;
        background-color: #fdfdfd;
        padding: 150px;
    box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
     
    }
    .inner-container h1{
        margin-bottom: 30px;
        font-size: 30px;
        font-weight: 900;
    }
     
    .text{
        font-size: 20px;
        font-family: 'Times New Roman', Times, serif;
        color: #545454;
        line-height: 30px;
        text-align: justify;
        margin-bottom: 40px;
    }
    h1,p{
      color: #F85370;
      font-family: 'Times New Roman', Times, serif;
      font-weight: bold;
    }
     
    .skills{
        display: flex;
        justify-content: space-between;
        font-weight: 700;
        font-size: 20px;
        color: #F85370;
        font-family: 'Times New Roman', Times, serif;
    }
    </style>
</head>
<body>
    <div class="about-section">
        <div class="inner-container">
            <h1>Cold Storage Managemant System</h1>
            <p class="text">
                Management of a cold storage warehouse includes consideration of storage requirements of products, loading and shipment plans, hygiene rules, regular operation of cooling devices and periodic maintenance of the devices.
                The most common need for cold storage is from third-party logistics providers, who will store or ship goods on behalf of a producer. 
                These providers use dedicated cold storage warehouses with the capacity for storing products in bulk at a range of different temperatures.
            </p>
            <div class="skills">
                <p>Developed By:   <br> Umme Salma<br>umme.salma@mpokket.com<br>Associate Software Engineer<br>Mpokket, Maybright Ventures Pvt Ltd.
                </p>
            </div>
        </div>
    </div>
</body>
</html>