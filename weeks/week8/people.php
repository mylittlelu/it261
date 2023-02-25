<?php
include('config.php');
include('./includes/header.php');


$sql = 'SELECT * from people';
// connect to the database

$iConn = mysqli_connect(DB_HOST,DB_PORT,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// we are asking if the number of rows is greater than 0.

if(mysqli_num_rows($result) > 0) {
  // reading rows with a while loop
  while($row = mysqli_fetch_assoc($result)) {
   echo '
   <h2>Information about:  '.$row['first_name'].'</h2>
   <ul> 
   <li><b>First Name:</b> '.$row['first_name'].'</li>
   <li><b>Last Name:</b> '.$row['last_name'].'</li>
   <li><b>Birthdate:</b> '.$row['birthdate'].'</li>
    </ul>
    <p>For more information about '.$row['first_name'].', click <a href=""> here</a>. </p>
';


  } // end while

} else { // end if num of rows is > 0
echo 'No one is home.';

}

// Release the server
@mysqli_free_result($result);

//close connection
@mysqli_close($iConn);

?>
<aside>
<h3>Random images go here</h3>

</aside>

<?php
include('./includes/footer.php');