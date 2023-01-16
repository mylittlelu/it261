<?php
// my variables

// a variable is a container for data


$name = "Anne"; // Anne is a string
$name='Olga'; // also a string
echo $name;

$body_temp = 98; // 98 is an integer
$body_temp_new = 98.6; // 98 is not an integer. It is a float (decimal)
echo '<br>';
echo '<br>';
echo  $body_temp;

echo  $body_temp_new;
echo '<br>';
echo  "My name is $name!";
echo '<br>';
echo  'My name is $name!'; // Olga recommends the single quotes

echo '<br>';
echo  'My name is '.$name.'!'; // Olga recommends the single quotes; use a '. and .' at the beginning and end of the variable

echo '<br>';
echo  'the normal body temp for a human is '.$body_temp_new.''; // Olga recommends the single quotes

$name = 'Sharon';
echo '<br>';
echo  "My name is $name!";


$x = 20;
$y = 5;
$z = $x + $y; // she is using the term 'assigned' vs 'equals'

echo '<br>';
echo  $z;


$z=$x * $y;
echo '<br>';
echo  $z;

$z=$x / $y;
echo '<br>';
echo  $z;

$first_name = 'Anne';
$last_name = 'VanVoorthuysen';
echo '<br>';
echo $first_name . ' ' . $last_name;


echo '<br>';
echo "My full name is $first_name $last_name";  // if you use double quotes, you don't need to use '. .'
echo '<br>';
echo 'My full name is '.$first_name.' '.$last_name.'';

