<?php

  echo '<h2>Navigation that will have a key and a value</h2>'; // these have key and a value, in that order.

  $nav = array(
    'index.php' => 'Home',
    'about.php' => 'About',
    'daily.php' => 'Daily',
    'project.php' => 'Project',
    'contact.php' => 'Contact',
    'gallery.php' => 'Gallery',
  );

  echo '<ul>';
  foreach($nav as $key => $value) {
  echo '<li style="list-style-type:none"><a style="text-decoration:none" href="'.$key.'">'.$value.' </a></li>';
}
  echo '</ul>';

  echo '<h2>This navigation will display a different color when on the index.php page.</h2>'; // these have key and a value, in that order.

  // This will define a constant

  define('THIS_PAGE', basename($_SERVER['PHP_SELF'])); // 'THIS_PAGE' will be whatever page we are on

  // adding an if statement - if we are on this_page and it is index.php, do something

  echo '<ul>';
  foreach($nav as $key => $value) {
    if(THIS_PAGE == $key) {
        echo '<li style="list-style-type:none"><a style="color:red;text-decoration:none;" href="'.$key.'">'.$value.' </a></li>';
    } else {
        echo '<li style="list-style-type:none"><a style="color:green; text-decoration:none;" href="'.$key.'">'.$value.' </a></li>';
    }


  } // end foreach
  echo '</ul>';