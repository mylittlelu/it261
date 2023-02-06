

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currency 1 PHP form</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet"
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']  ;?>" method="post">
        <fieldset>
        <label>NAME</label>
        <input type="text" name="name">

        <label>EMAIL</label>
        <input type="email" name="email">

        <label>Enter the amount to convert:</label>
        <input type="number" name="amount">

    <!-- Radio button that has additoinal attribute of value (see week 2) -->
        <label>Choose a currency to convert to dollars:</label>
        <ul>
        <li><input type="radio" name="currency" value="0.017">Rubles</li>
        <li><input type="radio" name="currency" value="0.76">Canadian</li>
        <li><input type="radio" name="currency" value="1.15">Pounds</li>
        <li><input type="radio" name="currency" value="1.00">Euros</li>
        <li><input type="radio" name="currency" value="0.0074">Yen</li>
        </ul>
        <input type="submit" value="Convert it">

        <p><a href="">RESET</a></p>
        </fieldset>

    </form>
<?php 
// start with server request method
// then check if any fields are empty
// if no empty fields, it will elseif they are set

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
if(empty($_POST['name'] &&  
$_POST['email'] &&  
$_POST['amount'] &&  
$_POST['currency'] )){
echo '<p class="error">Please fill out all fields.</p>';

} elseif (isset($_POST['name'],
$_POST['email'],
$_POST['amount'],
$_POST['currency'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$amount = $_POST['amount'];
$currency = $_POST['currency'];
$dollars = $amount * $currency;

echo '
<div class="box">
<h2>Hello '.$name.'</h2>
<p>You have <b>$'.floor($dollars).' American</b> dollars to spend.We will email this information to you at '.$email.'.</p>

</div> 
';

}

} // END SERVER REQUEST

?>

</body>
</html>