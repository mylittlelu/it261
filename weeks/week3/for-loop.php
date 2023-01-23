<?php
// demonstrates for loops in addition to placing php inside HTML
// the for loop loops through a block of code a specified number of times.
// for (init counter; testcounter; increment counter) {
//  code to be executed    
//  }

// celcius and fahrenheit

// $far = ($cel * 9/5) +32;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversion Tables</title>
    <style>
        * {
            padding:0;
            margin:0;
            box-sizing:border-box;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        table {
            width:500px;
            margin:20px auto;
            border-collapse:collapse;
            border:1px solid lightblue;
        }

        td, th {
            border-collapse:collapse;
            border:1px solid lightblue;
            padding:5px;
        }

        h1, h2 {
            text-align:center;
            margin: 10px 0;
            color:green;
        }
        
    </style>
</head>
<body>
    <h1>Celcius to Fahrenheit Table</h1>
    <table>
        <tr>
            <th>Celcius</th> 
            <th>Fahrenheit</th> 
        </tr>
        <?php
            for($cel = 0; $cel <= 100; $cel += 2) {
                $far = ($cel * 9/5) +32;
                echo '<tr>';
                echo '<td> '.$cel.' degrees  </td>';
                echo '<td> '.$far.' degrees </td>';
                echo '</tr>';
            }
        ?>

    </table>


<br>
<h1>Kilometers to Miles Table</h1>
    <table>
        <tr>
            <th>Kilometers</th> 
            <th>Miles</th> 
        </tr>
        <?php
            for($km = 0; $km <= 100; $km += 5) {
                $mil = ($km * .62137);
                echo '<tr>';
                echo '<td> '.$km.' kliks  </td>';
                echo '<td> '.$mil.' miles </td>';
                echo '</tr>';
            }
        ?>

    </table>






</body>
</html>