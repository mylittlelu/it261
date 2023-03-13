<?php
// our login talks to server
include('server.php');
include('./includes/header.php');

?>
<div id="wrapper">
<h1 class="center">Login</h1>
<form action="<? echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>
<label>Username</label>
<input type="text" name="username" value="<?php if(isset($_POST['username'])) echo htmlspecialchars($_POST['username']) ;?>">

<label>Password</label>
<input type="password" name="password">

<button type="submit" class="btn" name="login_user">Login</button>

<button type="button" onclick="window.location.href='<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>'">Reset </button>

<?php
include('errors.php');
?>

</fieldset>

</form>
<p class="center">Haven't registered? Please visit the <a href="register.php">Registration</a> page.</p>

</div> 
<!-- end wrapper div -->

<?php include('./includes/footer.php'); 