<?php
// str_replace and substr (substring) functions
// substring(string,start,length)

$statement = 'Presently, I am reading the Looming Tower';

echo $statement;
echo '<br>';
echo substr($statement, 0);

echo '<br>';
echo substr($statement, 1);

echo '<br>';
echo substr($statement, 11);

echo '<h2>now I would like to just display the words -I am reading</h2>';
echo substr($statement, 11,12);

echo '<h2>display just looming</h2>';
echo substr($statement, -13, 7);

echo '<h2>display just ...</h2>';
echo substr($statement, 4, 13);

echo '<h2>display just...</h2>';
echo substr($statement, -20,2);

echo '<h2>display str_replace function</h2>';
$statement2 = 'Hulu\'s rendition of the Looming Tower is based on the book named The looming Tower. ';
echo str_replace('the','The',$statement2). '<br />';
echo str_replace('l','L',$statement2);

?>