<?php

// this form uses the $_POST global variable
// Additional fields added here. 
// The logic:  if I don not enter anything inside the input field, there will be a messge.
// if a field is empty, do 'x' (an if else statement)
// first_name, last_name, email, comments

if(isset($_POST['first_name'],
  $_POST['last_name'],
  $_POST['email'],
  $_POST['comments'])) {
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $comments= $_POST['comments'];

// create another if statement: if fields rae empty, echo please fill out the fields

if(empty(
$_POST['first_name'] &&
$_POST['last_name'] &&
$_POST['email'] &&
$_POST['comments'])) {
    echo 'Please fill out all the fields';
    echo '<br>';
} else {
echo $first_name;
echo '<br>';
echo $last_name;
echo '<br>';
echo $email;
echo '<br>';
echo $comments;
echo '<br>';
}  // end if empty else

  } // end form fields isset
  
  else {
echo '
<form action = "" method ="post" >

<label>First Name:</label>
<input type="text" name="first_name">

<label>Last Name:</label>
<input type="text" name="last_name">

<label>EMAIL:</label>
<input type="email" name="email">

<label>Comments:</label>
<textarea name="comments"> </textarea>

<input type="submit" value="Send">
</form>
<p><a href="">RESET</a></p>
';

  } // end else


