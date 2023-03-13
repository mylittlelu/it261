<?php
// week 9's index for now but home page of a potential website. It must show the session_start() function

session_start();
include('config.php');

// is the user logged in correctly? If not, they will receive a message and be directed back to the login page.

if(!isset($_SESSION['username'])) {
$_SERVER['msg'] = 'You must login.';
header('Location:login.php');
}

if(isset($_GET['logout'])) {
  session_destroy();
  unset($_SESSION['username']);
  header('Location:login.php');
}

include('./includes/header.php');
?>

<header>

<?php
if(isset($_SESSION['success'])) :?>
<div class="success">
<h3>
<?php echo $_SESSION['success'];
unset($_SESSION['success']);?>
</h3>
</div> 
<!-- close success div -->
<?php endif; ?>

<?php // is the session username set?
if(isset($_SESSION['username'])) :?>
<div class="welcome-logout">
<h3>Welcome <?= $_SESSION['username'] ?>.</h3>
<p><a href="index.php?logout='1'">Logout</a></p>
</div> 
<!-- end close welcome logout div  -->
<?php endif; ?>

</header>

<div id="wrapper">
<h1>Welcome to the Home Page</h2>
</div>
<!-- end wrapper -->

<?php include('./includes/footer.php');
