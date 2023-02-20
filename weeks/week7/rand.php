<?php
// Rand function

// Dice

$dice = rand(1,6);
echo '<p>'.$dice.'</p>';

// 2 dice

$dice1 = rand(1,6);
$dice2 = rand(1,6);
echo '<p>'.$dice1.' and '.$dice2.'</p>';

echo '<h2>Add some if else statements...</h2>';
// if the dice is a double 6, we win big
//if it is just a double of any other number, still will win
//no double, no win

$dice1a = rand(1,6);
$dice2a = rand(1,6);

if($dice1a == 6 && $dice2a == 6) {
    echo '<b>Dice 1: </b>'.$dice1a.'<br> <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>You won big!</h2>';
} elseif($dice1a !=6 && $dice2a != 6 && $dice1a == $dice2a) {
    echo '<b>Dice 1: </b>'.$dice1a.' <br><b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>You still won!</h2>';
} else {
    echo '<b>Dice 1: </b>'.$dice1a.' <br> <b>Dice 2:</b> '.$dice2a.'';
    echo '<h2>Nope. You won not.</h2>';
}
echo '<h2>Display images using the random function</h2>';

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';

echo '<h2>Create a function...</h2>';
function random_images($photos) {

$my_return = "";
$i = rand(0,4);
$selected_image = ''.$photos[$i].'.jpg';
$my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';
return $my_return;

}// end function

echo random_images($photos);