<?php

ob_start(); // attempt at eliminating the header errors

define('THIS_PAGE', basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE) {
    case 'index.php' :
        $title = 'Home of Website';
        $body = 'home';
        break;

    case 'About.php' :
        $title = 'About';
        $body = 'about inner';
        break;

    case 'daily.php' :
        $title = 'Daily';
        $body = 'daily inner';
        break;

    case 'pets.php' :
        $title = 'Project';
        $body = 'project inner';
        break;
		
    case 'contact.php' :
        $title = 'Contact';
        $body = 'contact inner';
        break;

    case 'gallery.php' :
        $title = 'Gallery';
        $body = 'gallery inner';
        break;

        
}
//  navigation array
$nav = array(
 'index.php' => 'Home',
 'about.php' => 'About',
 'daily.php' => 'Daily',
 'pets.php' => 'Project',
 'contact.php' => 'Contact',
 'gallery.php' => 'Gallery'
  );

  function make_links($nav) {
    $myreturn = '';
    foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
    $myreturn .= '<li style="list-style-type:none"><a class="current" href="'.$key.'">'.$value.' </a></li>';
    } else {
    $myreturn .= '<li style="list-style-type:none"><a href="'.$key.'">'.$value.' </a></li>';
    }

    } // end foreach
return $myreturn;

} // end make_links function

// $nav = array(
//    'gallery.php' => 'Gallery',
//        'contact.php' => 'Contact',
//            'project.php' => 'Project',
//                'daily.php' => 'Daily',
//                    'about.php' => 'About',
//                        'index.php' => 'Home'
// ); 


// my form's php





$first_name = '';
$last_name = '';
$email = '';
$phone = '';
$gender = '';
$course = '';
$comments = '';
$privacy = '';
$campus = '';


$first_name_err = '';
$last_name_err = '';
$email_err = '';
$phone_err = '';
$gender_err = '';
$course_err = '';
$comments_err = '';
$privacy_err = '';
$campus_err = '';


// homework 3



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

//   if(empty($_POST['phone'])) {
//     $phone_err = 'Please fill in your phone.';
//   } else {
//     $phone = $_POST['phone'];
//   }

if(empty($_POST['phone'])) { // if empty, type in your number
    $phone_err = 'Your phone number please!';
    } elseif(array_key_exists('phone', $_POST)){
    if(!preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone']))
    { // if you are not typing the requested format of xxx-xxx-xxxx, display Invalid format
    $phone_err = 'Invalid format! Enter as ###-###-####';
    } else{
    $phone = $_POST['phone'];
    } // end else
    } // end main if

  if(($_POST['campus'] == NULL)) {
    $campus_err = 'Please select the campus.';
  } else {
    $campus = $_POST['campus'];
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


  if(empty($_POST['course'])) {
    $course_err = 'Select course';
  } else {
    $course = $_POST['course'];
  }

  // course function

  function my_course($course) {
  $my_return = '';
  
  if (!empty($_POST['course'])) {
  $my_return = implode(', ', $_POST['course']);

  } else {
    $course_err = 'Please pick your course.';
  }

  return $my_return; //return must occur before the end of the function

  } // end function

  if(isset($_POST['first_name'],
  $_POST['last_name'],
  $_POST['email'],
  $_POST['phone'],
  $_POST['gender'],
  $_POST['course'],
  $_POST['campus'],
  $_POST['comments'],
  $_POST['privacy']  )) {
$to = 'atschider@gmail.com';
//$to = 'szemeo@mystudentswa.com';
$subject = 'Test email on ' .date('m/d/y, h i A');
$body= '
First name : '.$first_name.' '.PHP_EOL.'
Last name : '.$last_name.' '.PHP_EOL.'
Email : '.$email.' '.PHP_EOL.'
Phone : '.$phone.' '.PHP_EOL.'
Gender : '.$gender.' '.PHP_EOL.'
Campus : '.$campus.' '.PHP_EOL.'
Course : '.my_course($course).'  '.PHP_EOL.'
Comments : '.$comments.' '.PHP_EOL.'
';

$headers = array(
  'From' => 'noreply@mystudentswa.com'
);

if(!empty($first_name && $last_name && $email && $gender && $phone && $campus && $course && $comments) &&
preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $_POST['phone'])) {
 mail($to,$subject,$body, $headers);
 header('Location:thx.php');  //I am aware of the error this line causes on my web server but not how to fix.
}
  } // end isset


} // end server request method


?>