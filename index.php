<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Page</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet"
</head>
<body>
    <h1> <a href=index.php">AVANV's Portal Page</a> </h1>
    <h2>The navigation below represents our BIG assignments. </h2>
<div id="wrapper">

<nav>
<ul>
  <li><a href=" ">Switch </a></li>
  <li><a href=" ">Troubleshoot </a></li>
  <li><a href=" ">Calculator </a></li>
  <li><a href=" ">Email </a></li>
  <li><a href=" ">Database</a></li>
  <li><a href=" ">Gallery </a></li>
</ul>
</nav>

<main>
<h2> About me...</h2>
<img class="right" src="images/hobiecrop.jpg" alt="pic of anne">
<p>Hey! My name's Anne. I live with my two Jack Russels and work at UW in IT. I love to travel. But after work there's mostly just time for some hiking with the dogs or working on projects around the house.</P>
<p>I'm learning PHP to be competitive in my field.</p>
</br>
</br>
</br>
<h3>Here is my MAMP screenshot: </break>

<img src="images/mamp.png" alt="mamp screenshot">
</h3>
</br>
</br>
</br>
<h3>...here is my array screenshot (I used the code provided but it does not produce an error -??):</h3></br>
<img src="images/arrayscreenshot.PNG" alt="test_mamp">


</main>


<aside>
<h2>Weekly Class Exercises</h2>
<h3>Week 2</h3>
<ol>
    <li><a href="var.php">var.php</a></li>
    <li><a href="var.php">var2.php</a></li>
    <li><a href="var.php">var3.php</a></li>
    <li><a href="var.php">var4.php</a></li>
</aside>



</div>
<! close wrapper -->
<footer>
    <ul>
        <li>Copyright &copy; 2023</li>
        <li> || </li>
        <li>All Rights Reserved</li>
        <li> || </li>
        <li><a href="website/index.html">Web Design by AVANV</a></li>
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
