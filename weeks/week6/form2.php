<!-- remember, you cannot echo above the doctype -->
<?php

$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$gender_err = '';
$wines_err = '';
$comments_err = '';
$privacy_err = '';
$regions_err = '';



if($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    if(empty($_POST['first_name'])) {
    $first_name_err = 'Please fill in your first name.';
  } else {
    $first_name = $_POST['first_name'];
  }

  if(empty($_POST['last_name'])) {
    $last_name_err = 'Please fill in your last name.';
  } else {
    $last_name = $_POST['last_name'];
  }

  if(empty($_POST['email'])) {
    $email_err = 'Please enter your email.';
  } else {
    $email = $_POST['email'];
  }

  if(empty($_POST['gender'])) {
    $gender_err = 'Please choose a gender.';
  } else {
    $gender = $_POST['gender'];
  }

  if(empty($_POST['phone'])) {
    $phone_err = 'Please fill in your phone.';
  } else {
    $phone = $_POST['phone'];
  }

  if(($_POST['regions'] == NULL)) {
    $regions_err = 'Please select the region.';
  } else {
    $regions = $_POST['regions'];
  }

  if(empty($_POST['comments'])) {
    $comments_err = 'Please fill in your comments.';
  } else {
    $comments = $_POST['comments'];
  }

  if(empty($_POST['privacy'])) {
    $privacy_err = 'Please agree to our privcy policy.';
  } else {
    $privacy = $_POST['privacy'];
  }


  if(empty($_POST['wines'])) {
    $wines_err = 'Select wines';
  } else {
    $wines = $_POST['wines'];
  }

  if(isset($POST['first_name'],
  $POST['last_name'],
  $POST['email'],
  $post['phone'],
  $POST['gender'],
  $POST['wines'],
  $POST['regions'],
  $POST['comments'],
  $POST['privacy']  )) {

$to = 'avanv@uw.edu';
$subject = 'Test email on ' .date('m/d/y, h i A');
$body= '
First name: '.$first_name.' '.PHP_EOL.'
Last name: '.$last_name.' '.PHP_EOL.'
Email: '.$email.' '.PHP_EOL.'
Phone: '.$phone.' '.PHP_EOL.'
Region: '.$region.' '.PHP_EOL.'
Gender: '.$gender.' '.PHP_EOL.'
Comments: '.$comments.' '.PHP_EOL.'
';

mail($to,$subject,$body);
header('Location:thx.php');

  } // end isset


} // end server request method

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2 for Week 6</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>
    <legend>Contact Anne</legend>

    <label>First name</label>
    <span class="error"><?php echo $first_name_err ;?></span>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">

    <label>Last name</label>
    <span class="error"><?php echo $last_name_err ;?></span>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

    <label>Email</label>
    <span class="error"><?php echo $email_err ;?></span>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

   <label>Gender</label>
   <span class="error"><?php echo $gender_err ;?></span>
    <ul>
     <li>
      <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked"'    ;?>> Female
     </li>
     <li>
     <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked"'    ;?>> Male
     </li>
     <li>
      <input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "checked"'    ;?>> Neither
     </li>
    </ul>

    <label>Phone</label>    <span class="error"><?php echo $phone_err ;?></span>
    <input type="tel" name="phone" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">

    <label>Favorite Wines</label>
    <span class="error"><?php echo $wines_err ;?></span>
    <ul>
  
        <li>
    <input type="checkbox" name="wines[]" value="cab" <?php if(isset($_POST['wines']) && in_array('cab', $wines)) echo 'checked = "checked"' ;?>> Cabernet
        </li>
        <li>
    <input type="checkbox" name="wines[]" value="merlot" <?php if(isset($_POST['wines']) && in_array('merlot', $wines)) echo 'checked = "checked"' ;?>> Merlot
        </li>
        <li>
    <input type="checkbox" name="wines[]" value="syrah" <?php if(isset($_POST['wines']) && in_array('syrah', $wines)) echo 'checked = "checked"' ;?>> Syrah
        </li>
        <li>
    <input type="checkbox" name="wines[]" value="red" <?php if(isset($_POST['wines']) && in_array('red', $wines))echo 'checked = "checked"' ;?>> Red Blend
        </li>
        <li>
    <input type="checkbox" name="wines[]" value="malbec" <?php if(isset($_POST['wines']) && in_array('malbec', $wines)) echo 'checked = "checked"' ;?>> Malbec
        </li>
    </ul>

    <label>Regions</label>
    <span class="error"><?php echo $regions_err ;?></span>
    <select name="regions">
    <option value="" NULL <?php if(isset($_POST['regions']) && $_POST['regions'] == NULL) echo 'selected = "unselected"' ;?>> Select one</option>
    <option value="nw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'nw') echo 'selected = "selected"' ;?>> Northwest</option>
    <option value="sw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'sw') echo 'selected = "selected"' ;?>> Southwest</option>
    <option value="mw" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'mw') echo 'selected = "selected"' ;?>> Midwest</option>
    <option value="ec" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ec') echo 'selected = "selected"' ;?>> East Coast</option>
    <option value="ne" <?php if(isset($_POST['regions']) && $_POST['regions'] == 'ne') echo 'selected = "selected"' ;?>> Northeast</option>
    </select>

    <label>Comments</label>
    <span class="error"><?php echo $comments_err ;?></span>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>

    <label>Privacy</label>
    <span class="error"><?php echo $privacy_err ;?></span>
    <ul>
     <li>
      <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked"'    ;?>> Privacy
     </li>
    </ul>

    <input type="submit" value="Send">

    <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>'" value="Reset">

</fieldset>
</form>
</body>
</html>