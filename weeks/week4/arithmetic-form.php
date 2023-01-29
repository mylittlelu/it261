<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>arithmetic form</title>
<link href="css/styles.css" rel="stylesheet" type="text/css">
</head>

<body>
	<h1>Arithmetic Form</h1>
	<form action="" method="post">
	<fieldset>
		<label>Name</label>	
		<input type="text" name="name">
		
		<label>Phone</label>	
		<input type="tel" name="phone">
		
		<label>How many lattes?</label>	
		<input type="number" name="lattes">
		
		<label>How many cappuccinos?</label>	
		<input type="number" name="cappuccinos">
		
		<label>How many americanos?</label>	
		<input type="number" name="americanos">
		
		<label>Special requests:</label>	
		<textarea name="comments"> </textarea>
		
		<input type="submit" value="Send order">
		
	</fieldset>
	
	</form>
	
	<p><a href=""> RESET </a></p>
	
	<?php
	// variables: name, phone, lattes, cappuccinos, americanos, comments
	
	date_default_timezone_set('America/Los_Angeles');	
	$our_time=date('H:i'); // hours:minutes
	
	if (isset($_POST['name'],
			  $_POST['phone'],
			  $_POST['lattes'],
			  $_POST['cappuccinos'],
			  $_POST['americanos'],
			  $_POST['comments'] )) {
		
	// ad my if statments regarding empty fields
		
	if (empty($_POST['name'] &&
			  $_POST['phone'] &&
			  $_POST['lattes'] &&
			  $_POST['cappuccinos'] &&
			  $_POST['americanos'] &&
			  $_POST['comments'] )) {
		echo '<p class="error">Please fill out <b>all</b> fields!</p>' ;
		
	} else {
		
		$name = $_POST['name'];
		$phone = $_POST['phone'];
		$lattes = $_POST['lattes'];
		$cappuccinos = $_POST['cappuccinos'];
		$americanos = $_POST['americanos'];
		$comments = $_POST['comments'];
		$total = $lattes + $cappuccinos + $americanos;
		
	// if and elseif regarding our time
		
	if($our_time <= 11) {
		$our_time = "Good morning,";
		
	} elseif($our_time <=17) {
		$our_time = "Good afternoon,";
		
	} else {
		$our_time = "Good evening,";
	}

	echo '
	<div class="box">
	<h2>'.$our_time.' '.$name.'!</h2>
	<p>We have texted your order to <b>'.$phone.'</b>, totaling '.$total.' beverages:</p>

	<ul>
		<li>'.$lattes.' lattes</li>
		<li>'.$cappuccinos.' cappuccinos</li>
		<li>'.$americanos.' americanos</li>
	</ul>
	<p>Your special request: <b>'.$comments.'</b>
	<p>Thank you for your order!</p>
	</div>
	';
		
		
		
	}
		
		
	} // end isset
	
	?>
	
	
</body>
</html>
