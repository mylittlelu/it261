<?php
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

    case 'project.php' :
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
 'project.php' => 'Project',
 'contact.php' => 'Contact',
 'gallery.php' => 'Gallery'
  );

// $nav = array(
//    'gallery.php' => 'Gallery',
//        'contact.php' => 'Contact',
//            'project.php' => 'Project',
//                'daily.php' => 'Daily',
//                    'about.php' => 'About',
//                        'index.php' => 'Home'
// ); 

?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="css/styles.css"  text.css" rel="stylesheet">
</head>
<body class="<?php echo $body; ?>">

<header>
<div class="inner-header">
<a href="index.php">
<img style="max-width:100px; height:auto;" id="logo" src="./images/phpelephant.png" alt="logo">
</a>

<!-- <nav>
<ul>
  <li><a href="">Gallery</a></li>
  <li><a href="">Contact</a></li>
  <li><a href="">Project</a></li>
  <li><a href="">Daily</a></li>
  <li><a href="">About</a></li>  
  <li><a href="">Home</a></li>
</ul>
</nav> -->

<nav>
<ul>
<?php
  foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '<li style="list-style-type:none"><a style="color:red;text-decoration:none;" href="'.$key.'">'.$value.' </a></li>';
    } else {
        echo '<li style="list-style-type:none"><a style="color:white; text-decoration:none;" href="'.$key.'">'.$value.' </a></li>';
    }
  } // end foreach


?>
</ul>
</nav>


</div>
<!--end inner-header -->

</header>