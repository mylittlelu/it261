<?php
// concatenation
// operators - assignment operators
// some preset functions
// arrays

$name = 'Anne';
$first_name = 'Anne';
$last_name = "VanV";
echo '<br>';
$name = 'Anne';
$name .= ' VanV';
echo $name;

echo '<br>';
$color = 'red';
echo $color;



echo '<br>';
echo 'Anne\'s favorite color is '.$color.' '  ;


echo '<br>';
$x = 20;
$y = 5;
$z = $x + $y;
echo $z;

echo '<br>';
$x = 20;
$x += 5;
echo $x;





echo '<br>';
$x = 100;
$x /= 10;
echo $x;


echo '<br>';
echo '<h3 style="font-family:Calibri"> Our product, quantity and tax exercise </h3>';
$product = 120;
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097; 
echo $total;


echo '<br>';
echo '<h3 style="font-family:Calibri"> Balance that reflects 2 decimal places: floats and the function number_format </h3>';
echo '<br>';
$product = 120;  // integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.105; // adds tax to total
$total_friendly = number_format($total, 2); // adds 2 decimal places to new friendly total
echo $total_friendly;
echo '<br>';
echo 'We have a total of <b>$' .$total_friendly.' </b>dollars.';

echo '<br>';
$product = 120;  // integer
$quantity = 5;
$total = $product * $quantity;
$total *= 1.097; // adds tax to total
echo 'We have a total of <b>$' .number_format($total,2).' </b>dollars.';
echo '<h3>Second preset function: date</h3>';
echo date('Y');
echo '<br>';
echo date('l'); //day
echo '<br>';
// Prints the day, date, month, year, time, AM or PM
echo date("l jS \of F Y h:i:s A");
echo '<br>';
date_default_timezone_set('America/Los_Angeles');

echo date("l jS \of F Y h:i:s A");  // f=month, h:i:s is hours, minutes, seconds, A is AM/PM

echo '<br>';
echo '<h3>Arrays...</h3>';
echo '<h4>This is an indexed array</h4>';
$fruit[] ='bananas'; // 0
$fruit[] ='cherries';  // 1
$fruit[] ='melon';  // 2
$fruit[] ='kiwi';
$fruit[] ='avocado';
// You cannot echo an entire array!

echo $fruit[2];
echo '<br>';
$fruit = array(
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'avocado'
);

$fruit = [
    'bananas',
    'cherries',
    'melon',
    'kiwi',
    'avocado'
];
print_r($fruit);
echo '<br>';

echo '<br>';
var_dump($fruit);
echo '<br>';
echo '<h3>Associative Array:</h3>';
$nav = array(
    'index.php' => 'Home',   // index is the key and Home is the value
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery'
);
echo '<pre>';
var_dump($nav);
echo '</pre>';
echo '<br>';


echo '<br>';

echo '<br>';