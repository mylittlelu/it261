<?php

echo '<h2>First example of "a", ergo, it is FALSE, NOT NULL</h2>';
$a = 0;
echo "a is " . is_null($a) . "<br>";

echo '<h2>First example of "b", echoing "1" - what does that mean? 1 equals TRUE.</h2>';
$b = null;
echo "b is " . is_null($b) . "<br>";

echo '<h2>First example of "C", ergo, c IS NOT NULL</h2>';

$c = "null";
echo "c is " . is_null($c) . "<br>";

echo '<h2>First example of "D", so D IS NULL</h2>';

$d = NULL;
echo "d is " . is_null($d) . "<br>";
?>