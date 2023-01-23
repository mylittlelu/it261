<?php
// class coffee exercise
// if today is Sunday, it will be pumpkin latte day
// INTRODUCING the isset() function
// and then, a GLOBALvariable
// the switch

// starting the switch
// if $GET['today'] is set, $today, then all is well. But it is not set there fore the else is the day.
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function : asking if something has been set.

// $variable = 'this is our variable';
if(isset($variable)) {
echo 'The variable has been set.';

} else
echo 'The variable has not been set.';

echo '<br>';

/* if(isset($_GET['today'])) {
    echo 'Today has been set.';`
}  else {
    echo 'Not!';
} */

if(isset($_GET['today'])) {
$today = $_GET['today'];

} else {
    $today= date('l'); // l is the day of the week
}

switch($today) {
    case 'Sunday' : 
        $coffee = '<h2>Sunday is Pumpkin Latte day! </h2>';
        $pic = 'pumpkin.jpg';
        $alt = 'pumpkin latte';
        $content = '<p><b>Pumpkin Latte: </b> Our signature espresso and steamed milk with the celebrated flavor combination of pumpkin, cinnamon, nutmeg and clove. Enjoy it topped with whipped cream and real pumpkin-pie spices. 390 calories, 50g sugar, 14g fat.</p> ';
        break;
    case 'Monday' : 
        $coffee = '<h2>Monday is our Green Tea Latte day! </h2>';
        $pic = 'greentea.jpg';
        $alt = 'green tea latte';
        $content = '<p><b>Green Tea Latte: </b> Green tea lattes are rich in antioxidants and other health benefits, making them a great way to energize your mind and boost your immune system.</p> ';
        break;
    case 'Tuesday' : 
        $coffee = '<h2>Tuesday is our Regular Joe day! </h2>';
        $pic = 'joe.jpg';
        $alt = 'black coffee';
        $content = '<p><b>Cup o\' Joe: </b> Just delicious coffee. Period. Coffee that has been brewed without anything else but the coffee. No sugar, no sweetener, no creamer, no anything. There are a lot of reasons someone would want to skip the cream and sugar in their coffee. Health benefits, purely a taste thing, or being savvy with money are all reasons why someone might prefer their coffee black. </p> ';
        break;
    case 'Wednesday' : 
        $coffee = '<h2>Wednesday is Latte day! </h2>';
        $pic = 'latte.jpg';
        $alt = 'a latte';
        $content = '<p><b>Lattes: </b> You cannot go wrong with a classic latte: espresso blended with foamy milk—heaven in a cup.</p> ';
        break;
    case 'Thursday' : 
        $coffee = '<h2>Thursday is Americano Day! </h2>';
        $pic = 'americano.jpg';
        $alt = 'Americano';
        $content = '<p><b>Americano: </b> The Americano combines bold espresso with water to dilute its intensity. Depending on where you order, an Americano contains anywhere from a third of a cup to a half of a cup of espresso. The rest is filled with water, which can be hot or iced according to preference.</p> ';
        break;
    case 'Friday' : 
        $coffee = '<h2>Friday is Mocha Day! </h2>';
        $pic = 'mocha.jpg';
        $alt = 'mocha';
        $content = '<p><b>Mocha: </b>Mocha is an intensely flavorful coffee blend that originated in Ethiopia and was brought over to Europe by traders from Yemen in the late 1700s. It is made up of espresso and hot chocolate milk. Together, these create a rich flavor with notes of chocolate, caramel, earthy spices like cinnamon or nutmeg, and fruity flavors such as raspberry or orange blossom, which can come from their addition. Mocha is not just any old cup of o\' joe. Mocha can be served either hot or cold. </p> ';
        break;
    case 'Saturday' : 
        $coffee = '<h2>Saturday is Doppio Day! </h2>';
        $pic = 'dopio.jpg';
        $alt = 'doppio';
        $content = '<p><b>Doppio: </b>Doppio is still one of the most beloved espresso-based drinks that gives a nice little kick. The name itself is derived from Latin and is a combined version of three combined Latin words. This includes Dous, Plus, and Pleo which create the word Duplus. When this was translated into Italian, the rough word that came from this became Doppio. Pronounced DOH-pee-oh, the word just means double in Italian.</p> ';
        break;


}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>
    <style>
       * {
        padding:0;
        margin:0;
        box-sizing:border-box;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
       }
       #wrapper {
        width:940px;
        margin:20px auto;
       }
       h1, h2, img {
        margin-bottom:10px;
       }

       p {
        margin-bottom: 20px;
       }

       ul li {
        list-style-type: none;
       }
       ul li a {
        text-decoration:none;
       }
        </style>
</head>
<body>
   <div id="wrapper">
    <h1>Switch Classwork Exercise (not the daily homework) </h1>

<?php
echo $coffee;
?>

<img src="../../images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content;?>
<h2>Check out our daily specials...</h2>

<ul>
<li><a href="switch.php?today=Sunday">Sunday</a>  </li>
<li><a href="switch.php?today=Monday">Monday</a>  </li>
<li><a href="switch.php?today=Tuesday">Tuesday</a>  </li>
<li><a href="switch.php?today=Wednesday">Wednesday</a>  </li>
<li><a href="switch.php?today=Thursday">Thursday</a>  </li>
<li><a href="switch.php?today=Friday">Friday</a>  </li>
<li><a href="switch.php?today=Saturday">Saturday</a>  </li>
</ul>

</div>
<!-- end wrapper -->
</body>

</html>