<?php
// Wine List is an array of wines


echo '<h2>Wine List</h2>';

$wines = array(
  'Cabernet',
  'Merlot',
  'Syrah',
  'Malbec',
  'Red Blend'
);

echo $wines;

// you cannot echo an array, so using a foreach loop

echo '<ul>';
foreach($wines as $key) {

  echo '<li style="list-style-type:none">'.$key.'</li>';
}
  echo '</ul>';

  echo '<h2>Movies and Shows (a list with both a key and a value)</h2>'; // these have key and a value, in that order.

  $shows = [
    'Apple TV' => 'Severance',
    'Apple TV' => 'For All Mankind',
    'Showtime' => 'City on a Hill',
    'Showtime' => 'Homeland',
    'Movie' => 'Maverick',
    'HBO MAX' => 'Hacks'
  ];

  echo '<ul>';
  foreach($shows as $key => $value) {
  echo '<li  style="list-style-type:none"><b>'.$key.'</b>: '.$value.'</li>';
}
  echo '</ul>';

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
  echo '<li><a style="text-decoration:none" href="'.$key.'">'.$value.' </a></li>';
}
  echo '</ul>';