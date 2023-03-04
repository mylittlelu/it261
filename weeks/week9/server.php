<?php // this is where the session is defined. A session is a way to store information.
session_start();
include('config.php');
// the header include will be here
// include('./includes/header.php');

// this server.php page will be comminicating to the database
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


// register user using if isset reg_user
if(isset($_POST['reg_user']))  {
$first_name = mysqli_real_escape_string($iConn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($iConn, $_POST['last_name']);
$email = mysqli_real_escape_string($iConn, $_POST['email']);
$username = mysqli_real_escape_string($iConn, $_POST['username']);
$password_1 = mysqli_real_escape_string($iConn, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($iConn, $_POST['password_2']);

// verify all input fields have been completed
// if empty, use function called array_push()

if(empty($first_name)) {
  array_push($errors, 'First name is required.');
} 

if(empty($last_name)) {
    array_push($errors, 'Last name is required.');
  } 

if(empty($email)) {
  array_push($errors, 'Email is required.');
} 

if(empty($username)) {
    array_push($errors, 'A username is required.');
  } 

if(empty($password_1)) {
    array_push($errors, 'A password is required.');
  } 

// is password_2 not equal to password_1

  if($password_1 !== $password_2) {
    array_push($errors, 'Passwords do not match.');
  } 

// check username and password... AND select it from the table

$user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1 ";

$result = mysqli_query($iConn, $user_check_query) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

$rows = mysqli_fetch_assoc($result);

// an if statement with 2 nested if statements inside the main if statement
// bottom line is, you cannot have duplicate usernames or emails
if($rows) {

    if($rows['username']  == $username) {
        array_push($errors, 'Username already exists!');
    } 

    if($rows['email']  == $email) {
        array_push($errors, 'Email already exists!');
    } 


}// close big IF statement

// are there any errors??? Ideally no.

if(count($errors) == 0   ) {

$password = md5($password_1); // md5 creates a pwd over 32 bits

// Insert the information into our table
$query = "INSERT INTO users (first_name,last_name,email,username,password) VALUES ('$first_name','$last_name','$email','$username','$password')  ";

mysqli_query($iConn, $query);
$_SESSION['username'] = $username;
$_SESSION['success'] = $success;

// if successful, then we will be directed to our login page

header('Location:login.php');



} // close if count errors


} // end if isset reg_user
