<?php
// people-view page that starts with an include going to the config file but not the header
include('project/config1.php');
include('config.php');
//include('includes/header.inc');


// is our get set, or is is isset?

if(isset($_GET['id'])) {
  $id = (int)$_GET['id'];
} else {
    header('Location:pets.php');
}

// select from the table where peopleID = id

$sql = 'SELECT * FROM pet_history where pet_id='.$id.'';

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $name = stripcslashes($row['name']);
    $species = stripcslashes($row['species']);
    $dob = stripcslashes($row['dob']);
    $description = stripcslashes($row['description']);
    } // close while
} else { // end if statement
  $feedback = 'There is a problem.';
}  // end else
include('includes/header.inc');
// include('project/includes/header.php');
?>
<div id="wrapper">
  <main>
    <!-- <h1>Details</h1> -->
    <h2><?php echo $name; ?>'s Details</h2>
<ul>
    <?php
    echo '
    <li><b>Name: </b>'.$name.'</li>
    <li><b>Species: </b>'.$species.'</li>
    <li><b>Year of birth: </b>'.$dob.'</li>

    <p>'.$description.'</p>
    <p><a href="pets.php">return to the Pet List</a></p>
    </li>
    ';
    ?>
</ul>


</main>
<aside>

<figure>
<img src="./images/people<?php echo $id  ;?>.jpg" alt="<?php echo $last_name;?>">
<figcaption>
    <?php
    echo '
    '.$name.' 
    ';
    ?>
</figcaption>
</figure>
<!-- <p><i><?php 
echo $blurb;
?>
</i>
</p> -->

</aside> 

<?php
// Release the server
@mysqli_free_result($result);

//close connection
@mysqli_close($iConn);
?>
</div> 
<!-- end wrapper div -->


<?php
include('project/includes/footer.php');