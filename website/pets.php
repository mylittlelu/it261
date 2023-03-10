<?php
include('config.php');
include('./includes/header.inc');
include('project/config1.php');
?>

<div id="wrapper">

<!-- <div id="hero">
<img src="images/lamb75.gif" alt="Otis">

</div> -->
<!--end hero-->

<main>
   <h1>Pet History</h1>
<?php
$sql = 'SELECT * from pet_history order by dob asc';

// connect to the database
// $iConn = mysqli_connect(DB_HOST,DB_PORT,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));
$iConn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die(myError(__FILE__,__LINE__,mysqli_connect_error()));


$result = mysqli_query($iConn,$sql) or die(myError(__FILE__,__LINE__,mysqli_error($iConn)));

// ask if the number of rows in $sql is greater than 0.

if(mysqli_num_rows($result) > 0) {
  // reading rows with a while loop
  while($row = mysqli_fetch_assoc($result)) {
   echo '
   <h3>'.$row['name'].'</h3>
  <ul> 
   <li>...my '.$row['species'].', born in  '.$row['dob'].'.</li>
  
  </ul>
   <p><a href="pet-view.php?id='.$row['pet_id'].'  ">more about '.$row['name'].'</a>... </p>
   
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
</main>

<!-- <aside>
<h3>Headline 3 in Aside</h3>
<p>

    Lorem ipsum dolor sit amet. Ex harum molestiae id laborum velit aut recusandae delectus. Ex molestiae sint ex corrupti quis vel fugit sint ut consequatur doloremque et rerum enim eos natus sequi. Aut velit facilis et rerum eveniet et deleniti cupiditate. Id iusto quia et magnam nulla qui iure illum cum corporis quos et consectetur tempore ea assumenda ipsum eos illo expedita.
    
    Qui voluptas repellendus hic alias nulla 33 numquam quis aut maxime internos et beatae natus non unde voluptas nam inventore facilis. Ad provident earum sed dolore nulla et sint galisum ut harum possimus.
    
    Ut facere voluptas qui fugiat distinctio est nisi aliquam nam maiores alias ex sequi voluptates et voluptas dolores qui sint consequatur. Eum nemo voluptatibus et quas deleniti est dolores explicabo vel veritatis ipsum et voluptatibus incidunt ut vero veritatis ab voluptates doloribus.
    </p>
</aside> -->

</div>
<!--end wrapper-->

<?php
include('./includes/footer.inc');
