<?php
include('config1.php');
include('./includes/header.php');
?>
<div id="wrapper">
  <main>
    <h1>Pet History</h1>
<?php
$sql = 'SELECT * from pet_history';

// connect to the database
// $iConn = mysqli_connect(DB_HOST,DB_PORT,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// ask if the number of rows in $sql is greater than 0.

if(mysqli_num_rows($result) > 0) {
  // reading rows with a while loop
  while($row = mysqli_fetch_assoc($result)) {
   echo '
   <h2>'.$row['name'].'</h2>
  <ul> 
   <li><b>My '.$row['species'].', born in </b> '.$row['dob'].'</li>
  </ul>
    <p>For more information about '.$row['name'].', click <a href="pet-view.php?id='.$row['pet_id'].'  ">here</a>. </p>
';


  } // end while

} else { // end if num of rows is > 0
echo 'Nothing there.';

}

// Release the server
@mysqli_free_result($result);

//close connection
@mysqli_close($iConn);

?>
</main>
<!-- <aside>
<h3>Random images go here</h3>
<?php

$photos[0] = 'photo1';
$photos[1] = 'photo2';
$photos[2] = 'photo3';
$photos[3] = 'photo4';
$photos[4] = 'photo5';

$i = rand(0, 4);

$selected_image = ''.$photos[$i].'.jpg';
echo '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';

// echo '<h2>Create a function...</h2>';
// function random_images($photos) {

// $my_return = "";
// $i = rand(0,4);
// $selected_image = ''.$photos[$i].'.jpg';
// $my_return = '<img src="images/'.$selected_image.'" alt="'.$photos[$i].'" >';
// return $my_return;

// }// end function

// echo random_images($photos);
?>

</aside> -->
</div>
<!-- end wrapper div -->

<?php
include('./includes/footer.php');