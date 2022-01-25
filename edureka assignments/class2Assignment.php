<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px;
            border-spacing: 0px;
            border-style: solid;
        }
    </style>
</head>

<body>

    <?php
    //1.Create a script that displays 1-2-3-4-5-6-7-8-9-10on one line. There willbe no hyphen(-) at starting and ending position.

    for ($i = 0; $i <= 10; $i++) {

        if ($i == 10) {
            echo $i;
        } else {
            echo $i;
            echo "-";
        }
    }
    echo "<hr>";
    ?>

    <?php
    //2.Create a script using a for loop to add all theintegers between 0 and30 and display the total.

    $sum = 0;
    for ($i = 0; $i <= 30; $i++) {
        $sum = $sum + $i;
    }
    echo "sum of digits $sum";

    echo "<hr>";
    ?>

    <?php

    //3.Create a script to construct the following pattern,using nested for loop.

    for ($i = 0; $i <= 5; $i++) {
        for ($a = 0; $a <= $i; $a++) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    ?>

    <?php
    //4.Create a script to construct the following pattern,using a nested for loop.

    for ($i = 0; $i <= 5; $i++) {
        for ($a = 0; $a <= $i; $a++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = 0; $i <= 5; $i++) {
        for ($a = 5; $a >= $i; $a--) {
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    ?>

    <?php
    //5.Write a program to calculate and print the factorialof a numberusing a for loop. The factorial of a number is the product of allintegers up to and including that number, so the factorial of 4 is4*3*2*1= 24.

    $a = 4;

    $fact = 1;

    for ($i = 1; $i <= $a; $i++) {
        $fact = $fact * $i;
    }

    echo "product=" . $fact;
    echo "<hr>";

    ?>

    <?php

    //6.Write a program which will give you all of thepotential combinations ofa two-digit decimal combination, printed in a comma delimited format :

    for ($a = 1; $a <= 99; $a++) {
        if ($a >= 0 && $a <= 9) {
            echo 0;
            echo $a;
            echo ",";
        } else {
            echo $a;
            echo ",";
        }
    }

    echo "<hr>";
    ?>

    <?php
    //7.Write a program which will count the "e" charactersin the text "I amlearning PHP code".

    $str = "I amlearning PHP code";
    $pattern = "/e/i";
    echo "total no  of e's in <q>$str</q> is ";
    echo preg_match_all($pattern, $str);
    echo "<hr>";
    ?>

    <?php
    //8.Write a PHP script that creates the followingtable using for loops. Addcellpadding="3px" and cellspacing="0px" to the table tag.

    echo "<table>";
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr>";
        for ($a = 1; $a <= 5; $a++) {
            echo "<th>";
            echo $i . "*" . $a . "=" . $i * $a;
            // echo "\t";
            echo "</th>";
        }
        //echo "<br>";
        echo "</tr>";
    }

    echo "</table>";

    echo "<hr>";
    ?>

    <?php
    //9.Write a PHP script using nested for loop thatcreates a chess boardas shown below. Use table width="270px" and take 30px as cellheight and width.

    echo "<table>";
    for ($i = 0; $i < 8; $i++) {
        echo "<tr>";
        for ($a = 0; $a < 8; $a++) {
            echo "<td>";
            // $t=;
            if (($a + $i) % 2 == 0) {
                echo "<div style='width:40px;height:40px;background-color:black'></div>";
            } else {
                echo "<div style='width:40px;height:40px;background-color:white'></div>";
            }

            echo "</td>";
        }

        echo "</tr>";
    }

    echo "</table>";

    echo "<hr>";
    ?>

    <?php
    //10.Write a PHP script that creates the following table (use for loops)

    echo "<table>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        for ($a = 1; $a <= 10; $a++) {
            echo "<th>";
            echo $i * $a;
            // echo "\t";
            echo "</th>";
        }
        //echo "<br>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<hr>";

    ?>

    <?php

    //11.WriteaPHPprogramwhichiteratestheintegersfrom1to50.Formultiplesofthreeprint"Fizz"insteadofthenumberandforthemultiplesoffiveprint"Buzz".Fornumberswhicharemultiplesofboththreeandfive print "FizzBuzz".
    for ($i = 1; $i <= 50; $i++) {


        if ($i % 3 == 0) {
            echo "Fizz";
            echo "\t";
        } else if ($i % 5 == 0) {
            echo "Fizzbuzz";
            echo "\t";
        } else {
            echo $i;
            echo "\t";
        }
    }
    echo "<hr>";
    ?>

    <?php
    //12.Write a PHP program to generate and displaythe first n lines of a Floydtriangle. (use n=5 and n=11 rows).
    $n = 5;
    $al = ($n * ($n + 1)) / 2;
    $count = 1;


    for ($i = 0; $i <= 5; $i++) {
        for ($a = 0; $a < $i; $a++) {

            echo $count++;
            echo "\t";
        }
        echo "<br>";
    }
    echo "<hr>";

    ?>

    <?php
    //13.Write a PHP program to print alphabet pattern'E'.

    for ($i = 0; $i < 7; $i++) {
        if ($i == 0 || /*$i == 3 ||*/ $i == 6) {
            for ($a = 0; $a < 5; $a++) { {
                    echo "*";
                }
            }
            echo "<br>";
        }
        if ($i == 1 || $i == 2 || $i == 4 || $i == 5) {
            for ($a = 0; $a < 1; $a++) { {
                    echo "*";
                }
            }
            echo "<br>";
        }
        if ($i == 3) {
            for ($a = 0; $a < 4; $a++) { {
                    echo "*";
                }
            }
            echo "<br>";
        }
    }
    echo "<hr>";
    ?>

    <?php
    //14.Write a PHP program to print alphabet pattern'I'.
    
    echo "<pre>";
    for ($row = 0; $row < 11; $row++) {
        for ($col = 0; $col <= 11; $col++) {
            if ($col == 5 OR ($row == 0 AND $col > 0 AND $col < 10) OR ($row == 10 AND $col > 0 AND $col < 10)) {
                echo "*";
            } else {
                echo "&nbsp;";
            }
        }
        echo "<br/>";
    }
    echo "</pre>";
    echo "<hr>";
    ?>

    <?php
    //15.Write a PHP program to print alphabet pattern 'L'.
    for ($i = 0; $i < 7; $i++) {
        
        for($j=0;$j<5;$j++){
            if($j==0){
            echo "*";
            }
            if($i==6){
                echo "*";

            }
        }
     
        echo "<br>";
    }
    ?>
</body>

</html>