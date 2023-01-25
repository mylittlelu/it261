<?php
include('./includes/header.inc');
?>
<?php
// class coffee exercise
// if today is Sunday, it will be pumpkin latte day
// INTRODUCING the isset() function
// and then, a GLOBALvariable
// the switch

// starting the switch
// if $GET['today'] is set, $today, then all is well. But it is not set therefor the else is the day.
// else, today is TODAY

// GLOBAL VARIABLES are capitalized and start with $_GET

// what is the isset function : asking if something has been set.

// $variable = 'this is our variable';
// if(isset($variable)) {
// echo 'The variable has been set.';

// } else
// echo 'The variable has not been set.';

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
        $movie = '<h2>Sunday is Alien! </h2>';
        $pic = 'alien.jpg';
        $alt = 'ripley in alien';
        $content = '<p><b>Alien (1979): </b>The events of the original horror masterpiece take place in 2122, which puts only 18 years between it and Covenant. Of course, this being the movie that started it all, everything in Alien stands on its own. There’s a big mystery, plenty of scares and gore, and little more. The worldbuilding is intriguing but slim, and we learn early on that Weyland-Yutani was actively seeking the strange and lethal Xenomorph.

        </p> ';
        break;
    case 'Monday' : 
        $movie = '<h2>Monday is Aliens </h2>';
        $pic = 'aliens.jpg';
        $alt = 'aliens movie';
        $content = '<p><b>Aliens (1986): </b> 57 years after the events of Alien, in 2179, the sole survivor of the Nostromo, Ellen Ripley (Sigourney Weaver), is rescued in deep space and debriefed by her employers, who seem skeptical about her claims. To make matters worse, LV-426 is now the site of a large terraforming colony. And of course, some poor employees eventually come across the massive derelict ship full of dormant Xenomorph eggs.</p> ';
        break;
    case 'Tuesday' : 
        $movie = '<h2>Tuesday is Alien 3!</h2>';
        $pic = 'alien3.jpg';
        $alt = 'alien 3';
        $content = '<p><b>Alien 3 (1992)</b> Alien 3 begins shortly after Ripley, Newt (Carrie Henn), Hicks (Michael Biehn), and the damaged android Bishop (Lance Henriksen) enter cryonic stasis. In one the darkest movie starts of all time, Ripley crash-lands and finds herself trapped in a claustrophobic prison on Fiorina \“Fury\” 161, a barren world. Of course, the Xenomorphs had something to do with that, and the nightmare follows her down to the hellish planet.</p> ';
        break;
    case 'Wednesday' : 
        $movie = '<h2>Wednesday is Alien: Resurrection</h2>';
        $pic = 'resurrection.jpg';
        $alt = 'reserrection';
        $content = '<p><b>Resurrection (1997): </b> Resurrection made the biggest time jump in the franchise, distancing itself from Weyland-Yutani and that entire storyline. It is set in the year 2381, 202 years after the death of Ellen Ripley and the last known Xenomorph. One would think the franchise would take advantage of the situation to swap Sigourney Weaver\’s character for a new lead, but nope – she\’s cloned, alongside the embryo of a Xenomorph Queen, using blood samples taken before her death by Jonathan Clemens (Charles Dance).</p> ';
        break;
    case 'Thursday' : 
        $movie = '<h2>Thursday is Resident Evil! </h2>';
        $pic = 'evil.jpg';
        $alt = 'resident evil';
        $content = '<p><b>Resident Evil (2002): </b> Alice, a security operative for The Umbrella Corporation who is ordered to guard the secret entrance to an underground lab called The Hive, a genetic research lab that accidentally unleashed the deadly T-virus amongst their staff. The building\'s AI security system, The Red Queen, kills every living thing inside in an attempt to control the spreading infection. The virus causes the corpses of those killed to become reanimated and driven by an insatiable hunger for human flesh. A power failure leads to the 500 zombified employees being released as Alice and her team fight for survival.</p> ';
        break;
    case 'Friday' : 
        $movie = '<h2>Friday is Resident Evil: Apocalypse! </h2>';
        $pic = 'apoc.jpg';
        $alt = 'apocalypse';
        $content = '<p><b>Resident Evil: Apocalypse (2004): </b>Anderson returns to write but not direct in the second installment of the franchise, with the role being filled by Alexander Witt for his directorial debut. This film has been named as the best and worst of the series. While polarizing due to its focus on action rather than storyline, the film features adrenaline-fueled scenes as well as character moves that were reenacted from the game series and utilizes camera angles from in-game cut-scenes.</p> ';
        break;
    case 'Saturday' : 
        $movie = '<h2>Saturday is Resident Evil: Extinction </h2>';
        $pic = 'extinct.jpg';
        $alt = 'extinction';
        $content = '<p><b>Resident Evil: Extiction (2007): </b>As the T-virus spreads across the earth turning humanity at large into mindless, hungry undead, a group of survivors from the desolate Raccoon City travel through the Mojave desert in an attempt to reach Alaska and escape the impending zombie apocalypse. Continued experiments carried out by The Umbrella Corporation cause more terrifying mutations in the infected that make them even more deadly. Alice discovers the extent of her new powers brought on by the virus, and that her blood may hold a cure. She decides to seek revenge on The Umbrella Corporation, specifically Albert Wesker, a villain from the games introduced as a new character in this film.</p> ';
        break;


}

// change main background color if it is the weekend
$color = ($today == "Saturday" || $today == "Sunday") ? 'lightblue' : 'white';

?>



<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Classwork Exercise</title>

</head> -->
<style>
    main img {
        max-width: 90%;
        height:auto;
    }

     aside  ul li {
        list-style-type: none;
        line-height: 30px;
       }
      aside ul li a {
        text-decoration:none;
       }
    aside {
        padding-top: 50px;
    }
        </style>
<body>
   <div id="wrapper">
   <h1 style="text-align:left;">Welcome to my Daily page</h1>

<!-- this changes the main section's background color if it is the weekend -->
<main style="background-color: <?= $color ?>;">


<?php
echo $movie;
?>

<img  src="./images/<?php echo $pic;?>" alt="<?php echo $alt;?>">
<?php echo $content;?>


    </main>

    <aside>
    <h2>It's Sci-Fi Heroine Week!</h2>

<ul>
<li><a href="daily.php?today=Sunday">Sunday</a>  </li>
<li><a href="daily.php?today=Monday">Monday</a>  </li>
<li><a href="daily.php?today=Tuesday">Tuesday</a>  </li>
<li><a href="daily.php?today=Wednesday">Wednesday</a>  </li>
<li><a href="daily.php?today=Thursday">Thursday</a>  </li>
<li><a href="daily.php?today=Friday">Friday</a>  </li>
<li><a href="daily.php?today=Saturday">Saturday</a>  </li>
</ul>
    </aside>

</div>
<!-- end wrapper -->
</body>
<?php
include('./includes/footer.inc');
?>

</html>