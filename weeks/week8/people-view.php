<?php
// people-view page that starts with an include going to the config file but not the header
include('config.php');

// is our get set, or is is isset?

if(isset($_GET['id'])) {
  $id = (int)$_GET['id'];
} else {
    header('Location:people.php');
}

// select from the table where peopleID = id

$sql = 'SELECT * FROM people where people_id='.$id.'';

$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));

$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    $first_name = stripcslashes($row['first_name']);
    $last_name = stripcslashes($row['last_name']);
    $email = stripcslashes($row['email']);
    $birthdate = stripcslashes($row['birthdate']);
    $occupation = stripcslashes($row['occupation']);
    $blurb = stripcslashes($row['blurb']);
    $details = stripcslashes($row['details']);
    $feedback = '';
    } // close while
} else { // end if statement
  $feedback = 'There is a problem.';
}  // end else
include('./includes/header.php');
?>
<div id="wrapper">
  <main>
    <h1>People View</h1>
    <h2><?php echo $last_name; ?>'s Page</h2>
<ul>
    <?php
    echo '
    <li><b>First Name: </b>'.$first_name.'</li>
    <li><b>Last Name: </b>'.$last_name.'</li>
    <li><b>Email: </b>'.$email.'</li>
    <li><b>Birthdate: </b>'.$birthdate.'</li>
    <li><b>Occupation: </b>'.$occupation.'</li>
    <li>
    <p>'.$details.'</p>
    </li>
    ';
    ?>
</ul>
<p><a href="people.php">Return to People list</a></p>

</main>
<aside>
<h3>Aside</h3>
<figure>
<img src="./images/people<?php echo $id  ;?>.jpg" alt="<?php echo $last_name;?>">
<figcaption>
    <?php
    echo '
    '.$first_name.' '.$last_name.', '.$occupation.'
    ';
    ?>
</figcaption>
</figure>
<p><i><?php 
echo $blurb;
?>
</i>
</p>

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
include('./includes/footer.php');