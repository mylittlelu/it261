<?php
// date function and if statement

echo date('Y');
echo '<br>';
echo date('l, F j, Y h:i: A'); // l = day, F = month, j = date, Y = year, lower-case h is 12-hr clock, A is for AM


echo '<br>';

date_default_timezone_set('America/Los_Angeles');
echo date('l, F j, Y h:i: A');

echo '<br>';

$name = 'Anne';
$our_time = date('H:i A'); // uppercase H is the 24-hr format of the hour

echo '<br>';
echo $our_time;
echo '<br>';

// the logic behind this is, IF the time is less or equal to 11, then it is morning.
// if the time is less or equal to  17 (5 PM) then it is afternoon
// there will be an else that will mean it is evening.

if($our_time <= 11) {
    echo '<h2 style="color:yellow;">It\'s morning, '.$name.'</h2>
    <img src="sunrise.png" alt="sunrise">
    <p>It\'s time to get up.</p>
    ';
} elseif($our_time <= 17) {
    echo '<h2 style="color:orange;">Good afternoon, '.$name.'</h2>
    <img src="sun.png" alt="sun">
    <p></p>
    ';
}  else {
   echo '<h2style="color:hotpink;">Good evening, '.$name.'</h2>
   <img src="sunset.png" alt="sunset">
   <p></p>
   ';
}