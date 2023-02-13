<?php

function sayHello() {
    echo 'Hello PHP FUNCTION';
}

sayHello();

echo '<h2>Arithmetic for cube</h2>';

function cube($num) {
$cubing = $num * $num * $num;
echo $cubing;
}
cube(3);
// --------------

echo '<h2>Area is width * height</h2>';
function area($w,$l) {
$get_area = $w * $l;
return $get_area;
}
$get_area = area(5,12);
echo $get_area;
// ---------------

echo '<h2>Celcius converter</h2>';
function celcius_converter($cel) {
    $far = ($cel*9/5) + 32;
    echo $far;
}
celcius_converter(100);
// --------------

echo '<h2>Arrays in a function; using an indexed array</h2>';
function area_volume($a, $b, $c) {
$area = $a * $b;
$volume = $a * $b * $c;
return array($area, $volume);
}
// when you have an array, you have to do this 
$my_array = area_volume(10, 5, 20);
echo '<b>This is my area: </b> '.$my_array[0].'    <br>';
echo '<b>This is my volume: </b> '.$my_array[1].'    <br>';

// -----
echo '<h2>This is an array using the list function...</h2>';
function area_volume2($a, $b, $c) {
    $area = $a * $b;
    $volume = $a * $b * $c;
    return array($area, $volume);
    }
list($area,$volume) = area_volume2(5, 10, 30);
echo '<b>This is my area: </b> '.$area.'    <br>';
echo '<b>This is my volume: </b> '.$volume.'    <br>';


echo '<h2>The Navigation</h2>';

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

$nav['index.php'] = 'Home';
$nav['about.php'] = 'About';
$nav['daily.php'] = 'Daily';
$nav['project.php'] = 'Project';
$nav['contact.php'] = 'Contact';
$nav['gallery.php'] = 'Gallery';

function make_links($nav) {
    $myreturn = '';
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
    $myreturn .= '<li style="list-style-type:none"><a class="current" href="'.$key.'">'.$value.' </a></li>';
    } else {
    $myreturn .= '<li style="list-style-type:none"><a href="'.$key.'">'.$value.' </a></li>';
    }

    } // end foreach
return $myreturn;

} // end make_links function
echo '<h2>The Nav created with a function:</h2>';
echo make_links($nav);

echo '<h2>The Implode Function</h2>';

$cars = array('toyota','ford','subaru','audi','bmw','mercedes', 'lexus');
$my_cars = implode(', ',$cars);

echo $my_cars;

echo '<h2>Wines Logic</h2>

<p>If post wines is not empty, take post wines and implode them, and create a new variable named $my_wines.</p>';

?>