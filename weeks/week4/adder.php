
<html>
<head>
<title>My Adder Assignment</title>
<style>

</style>
</head>
<body>
<h1>Adder.php</h1> <form method="post" action=""><fieldset>
<label>Enter the first number:</label><input type="number" name="num1"><br>
	<label>Enter the second number:</label><input type="number" name="num2"><br>
<input type="submit" value="Add Em!!"> </fieldset></form>
<?php     //adder-wrong.php

if (isset($_POST['num1'], $_POST['num2'])){
$num1 = intval($_POST['num1']);
$num2 = intval($_POST['num2']);
$myTotal = $num1 + $num2;
echo '<h2>You added '.$num1.' and '.$num2.'</h2>';
echo ' <p> and the answer is <br>
<style="color:red;"> '.$myTotal.'!</p>';
echo '<p><a href="">Reset page</a></p>';
}
?>
 


</body>
</html>

<!-- line 6 variable misspelled; arithmatic incorrect (s/b +=) -->
<!-- line 7 had the '.$var.' formatting wrong and missing a closing h2 tag-->
<!-- line 9 is missing its closing apostrophe before the semicolon; variable missing opening . and quotes are wrong -->
<!-- line 10 is missing its closing </p> tag  and end-of-statement semicolon-->
<!-- line 11 needs a closing php tag after it -->
<!-- line 21 the opening form tag has a \; missing method of post; missing fieldset tag	-->
<!-- line 22 is missing the opening label tag; name is misspelled (s/b num1) -->
<!-- line 22 input type incorrect (s/b num) -->	
<!-- line 23 input type incorrect (s/b num); label tags incorrect -->	
<!-- line 24 value missing closing quote -->	
<!-- line 30 needs the characters after the closing html tag removed-->	