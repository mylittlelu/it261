<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Page</title>
    <link href="css/styles.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h1> <a href=index.php">AVANV's Portal Page</a> </h1>
    <h2>The navigation below represents our BIG assignments. </h2>
<div id="wrapper">

<nav>
<ul>
  <li><a href="weeks/week3/switch.php">Switch </a></li>
  <li><a href=" ">Troubleshoot </a></li>
  <li><a href="website/calculator.php">Calculator </a></li>
  <li><a href="">Email </a></li>
  <li><a href=" ">Database</a></li>
  <li><a href=" ">Gallery </a></li>
</ul>
</nav>

<main>

<h2> About me...</h2>
<img class="right" src="images/hobiecrop.jpg" alt="pic of anne">
<p>Hey! My name's Anne. I live with my two Jack Russels and work at UW in Information Technology. I love to travel. But after work there's mostly just time for a little hiking with the dogs or working on house projects. I'm learning PHP to be more competitive in my field.</p>

<h3>MAMP screenshot: </h3>
<p><img class="resize" src="images/mamp.png" alt="mamp screenshot"> </p>


<h3>Array Screenshot:</h3>
<p><img class="resize" src="images/arrayscreenshot.PNG" alt="test_mamp"><p>

</main>


<aside>
<h2>Main Assignments</h2>

<ul>
    <li><a href="">Using a Switch, HW3</a></li>
    <li><a href="">Troublshoot</a></li>
    <li><a href="">Travel Calculator</a></li>
    <li><a href="">Email</a></li>
    <li><a href="">Gallery</a></li>
    <li><a href="">Database</a></li>
</ul>
<h2>Weekly Class Exercises</h2>
<h3>Week 2</h3>
<ul>
    <li><a href="weeks/week2/var.php">var.php</a></li>
    <li><a href="weeks/week2/var2.php">var2.php</a></li>
    <li><a href="weeks/week2/currency-logic.php">currency-logic.php</a></li>
    <li><a href="weeks/week2/currency.php">currency.php</a></li>
    <li><a href="weeks/week2/heredoc.php">heredoc.php</a></li>
</ul>
<h3>Week 3</h3>
<ul>
	<li><a href="weeks/week3/index.php">nav arrays (navigation tricks)</a></li>
    <li><a href="weeks/week3/if.php">if (if, elseif)</a></li>
    <li><a href="weeks/week3/for-loop.php">for-loop (conversion tables)</a></li>
    <li><a href="weeks/week3/for-each.php">for-each (key and value arrays)</a></li>
    <li><a href="weeks/week3/date.php">date</a></li>
    <li><a href="weeks/week3/switch.php">switch</a></li>
</ul>
<h3>Week 4</h3>
<ul>
	<li><a href="weeks/week4/form-get.php">form-get.php</a></li>
    <li><a href="weeks/week4/form1.php">form1.php</a></li>
    <li><a href="weeks/week4/form2.php">form2.php</a></li>
    <li><a href="weeks/week4/form3.php">form3.php</a></li>
    <li><a href="weeks/week4/arithmetic-form.php">arithmetic-form.php</a></li>
    <li><a href="weeks/week4/celsius.php">celsius.php</a></li>
	<li><a href="weeks/week4/adder.php" style="font-size:10px;">(...and the corrected adder page)</a></li>
</ul>
		<h3>Week 5</h3>
<ul>
	<li><a href="weeks/week5/currency1.php">Form 1</a></li>
    <li><a href="weeks/week5/currency2.php">Form 2 (sticky form)</a></li>
    <li><a href="weeks/week5/currency3.php">Form 3</a></li>

</ul>
</aside>



</div>
<! close wrapper -->
<footer>
    <ul>
        <li>Copyright &copy; 2023; </li>
        <li>All Rights Reserved</li>
        <li> || </li>
        <li><a href="website/index.php">Web Design by AVANV</a></li>
        <li> || </li>
        <li><a id="html-checker" href="#">HTML Validation</a></li>
        <li> || </li>
        <li><a id="css-checker" href="#">CSS Validation</a></li>
        </ul>

    <script>
            document.getElementById("html-checker").setAttribute("href","https://validator.w3.org/nu/?doc=" + location.href);
            document.getElementById("css-checker").setAttribute("href","https://jigsaw.w3.org/css-validator/validator?uri=" + location.href);
    </script>
        
</footer>
</body>
</html>
