<!DOCTYPE html>
<html>
    <head>
        <style>
          body{
                background-color:thistle;
            } 
       .container{
            border-style: solid; 
            border-width: thin; 
            border-color:black;
            background-color:peachpuff;
            border: solid; 
            width: 500px;
            height: 500px;  
            padding-left:75px;
            margin-left: 600px;
        }

        form{
            text-align: left;
            padding-left: 75px;
            
            
        }

        h1,h2{
            text-align: center;
        }

        label{
           text-align: center;
        }
        </style>

    </head>
    <body>
    <div class="container">
        <h1> Form</h1>
        <h2>Student Info</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
        
          <label> <b>Name  </b><input type="text" id="name" name="name" placeholder="Enter your name"/> <br>  
                <b>Email   </b><input type="text" id="email" name="email" placeholder="Enter your email id"/><br><br></label>
          <label> <b>Gender  </b><input type="radio" name="gender" value="Male"/>Male
                                <input type="radio"  name="gender" value="Female"/>Female<br><br></label>
                                    <label>    <b>Department   </b><select  name="department">
                                            <option>Select</option>
                                            <option>Computer Science and Engineering</option>
                                            <option>Electronics & communication</option>
                                            <option>Civil</option>
                                            <option>Mechanical</option>
                                      </select><br></label>
                                      <label> <b>Location</b> <br>  <input type="checkbox" id="location" name="location" value="Bengaluru"/>Bengaluru
                                    <br> <input type="checkbox" name="location" value="Pune"/>Pune
                                    <br> <input type="checkbox" name="location" value="Delhi"/>Delhi
                                    <br><input type="checkbox" name="location" value="Noida"/>Noida<br><br></label>
                                    <label> <input type="submit" value="Submit"/> <input type="Button" value="Cancel"/><br><br></label>
    </div>
        </form>
        <?php
             if($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "The details are as follows:";
            echo "<br>";
            echo "Name: ".$_POST['name'];
            echo "<br>"; 
            echo "Email:    ".$_POST['email'];
            echo "<br>";
            echo "Gender:   ".$_POST['gender'];
            echo "<br>";
            echo "Department:   ".$_POST['department'];
            echo "<br>";
            echo "location:  ".$_POST['location'];
            }
        ?>
   
    </body>
</html>