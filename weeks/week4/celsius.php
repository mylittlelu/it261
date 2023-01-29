<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius Document</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
 <h1>Celsius Converter Form</h1>   

 <form action="<?php echo $SERVER['PHP_SELF']   ;?>" method="post">
<fieldset>
  <label>Enter the Celsius value:</label>
  <input type="number" name="cel">
  <input type="submit" value="Convert it!">
</fieldset>
<p><a style="text-decoration:none;" href="">Reset</a></p>
 </form>

 <?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if(isset($_POST['cel']))  {
        $cel = $_POST['cel'];
    // a new function to make sure that the values are integers intval()
        $cel_int = intval($cel);
        $far = ($cel_int * 9/5) +32;
        
 // if the end user does not enter a value, say something

    if($cel == NULL) {

    echo '<p class="error">Please fill in the Celsius value!</p>';

    } elseif($far <= 32) {
    echo '<p> '.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit. <br>
    and it is cold!</p>';
    }

    elseif($far <= 45) {
        echo '<p> '.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit. <br>
        and it is just a little chilly.</p>';
        }

    elseif($far <= 60) {
            echo '<p> '.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit. <br>
            and it is sweater weather.</p>';
            }

    elseif($far <= 75) {
            echo '<p> '.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit. <br>
            and we are going to the park.</p>';
                }         

    elseif($far <= 90) {
            echo '<p> '.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit. <br>
            and we are going swimming.</p>';
                } 

    else {
        echo '<p> '.$cel_int.' degrees Celsius equals '.$far.' degrees Fahrenheit. <br>
            and we are inside with the A/C on!</p>';
    }

    } //end isset


}  // end post



 ?>

</body>
</html>