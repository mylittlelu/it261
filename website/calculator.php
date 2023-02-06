<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mileage Calculator</title>
    <link href="../weeks/week5/css/styles.css"type="text/css" rel="stylesheet"
</head>
<body>
    <!-- https://www.geeksforgeeks.org/how-to-prevent-xss-with-html-php/ -->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
        <fieldset>
        <label>Your first name:</label>
        <input type="text" name="name" value="<?php if(isset($_POST['name'])) echo htmlspecialchars($_POST['name']);?>">

        <label>Total miles you will be driving:</label>
        <input type="number" name="miles"value="<?php if(isset($_POST['miles'])) echo htmlspecialchars($_POST['miles']);?>">

        <label>Average speed you will be driving:</label>
        <input type="number" name="speed"value="<?php if(isset($_POST['speed'])) echo htmlspecialchars($_POST['speed']);?>">
		
        <label>Hours/day you will be driving:</label>
        <input type="number" name="hours"value="<?php if(isset($_POST['hours'])) echo htmlspecialchars($_POST['hours']);?>">

 <!-- Radio button that has additoinal attribute of value (see week 2) -->
        <label>Price of gas:</label>
        <ul>
        <li><input type="radio" name="currency" value="6.00" <?php if(isset($_POST['currency']) && $_POST['currency']== 6.00 ) echo 'checked="checked" ' ;?>>$6.00</li>
        <li><input type="radio" name="currency" value="6.50" <?php if(isset($_POST['currency']) && $_POST['currency']== 6.50 ) echo 'checked="checked" ' ;?>>$6.50</li>
        <li><input type="radio" name="currency" value="7.00" <?php if(isset($_POST['currency']) && $_POST['currency']== 7.00 ) echo 'checked="checked" ' ;?>>$7.00</li>
       
        </ul>
<!-- -->
        <label>Select your car's optimum fuel efficiency speed:</label>
        <select name="efficiency">
            <option value="" NULL <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == NULL)
            echo 'selected="unselected"' ;?>>Select one</option>

            <option value=10  <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '10 MPG')
            echo 'selected="selected"' ;?>>10 MPG</option>

            <option value=30 <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '30 MPG')
            echo 'selected="selected"' ;?>>30 MPG</option>

            <option value=50 <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '50 MPG')
            echo 'selected="selected"' ;?>>50 MPG</option>

            <option value=65 <?php if(isset($_POST['efficiency']) && $_POST['efficiency'] == '65 MPG')
            echo 'selected="selected"' ;?>>65 MPG</option>

        </select>

        <input type="submit" value="Calculate">

        <p><a href="">RESET</a></p>
        </fieldset>

    </form>
<?php 
// start with server request method
// then check if any fields are empty
// if no empty fields, it will elseif they are set

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{

if(empty($_POST['name'])){
    echo '<p class="error">Please enter your name.</p>';
}

if(empty($_POST['miles'])){
    echo '<p class="error">Please enter the trip\'s total miles.</p>';
}
if(empty($_POST['speed'])){
    echo '<p class="error">Please enter your avg driving speed.</p>';
}
if(empty($_POST['hours'])){
    echo '<p class="error">Please enter hours/day driving.</p>';
}

if(empty($_POST['currency'])){
    echo '<p class="error">Please select a gas price.</p>';
}
	
if(empty($_POST['efficiency'])){
    echo '<p class="error">Please select your fuel efficiency.</p>';
}


 if (isset($_POST['name'],
$_POST['miles'],
$_POST['speed'],
$_POST['hours'],
$_POST['currency'],	
$_POST['efficiency'])) {		   
$name = $_POST['name'];
$miles = floatval($_POST['miles']);
$speed = floatval($_POST['speed']);
$hours = floatval($_POST['hours']);
$currency = floatval($_POST['currency']);
$efficiency = floatval($_POST['efficiency']);
$totalgallons = $miles/$efficiency;
$totalhours = $miles / $speed;
$totaldays = ($miles/$speed)/$hours;	
$totalcost = ($miles/$efficiency)*$currency;
	 
if(!empty($name && $miles && $speed && $hours && $currency && $efficiency)) {
echo '
<div class="box">
<h2>Trip Summary</h2>
<p>Hello '.ucfirst($name).'. You\'ll be traveling a total of <b>'.number_format($totalhours,1).' hours</b> over <b>'.number_format($totaldays,1).' days</b>,
 using <b>'.$totalgallons.' gallons</b> of gas costing <b>$'.number_format($totalcost,0).'</b>.</p>

</div> 
';
}
}

} // END SERVER REQUEST
	

?>

</body>
</html>