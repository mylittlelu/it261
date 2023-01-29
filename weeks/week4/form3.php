
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3 inside HTML</title>
    <link href="css/styles.css" type="text/css" rel="stylesheet">
</head>
<body>
    <h1>Form3.php</h1>
    <form action="" method="post">
        <fieldset>
           <label>First Name</label>
           <input type="text" name="first_name"> 

           <label>Last Name</label>
           <input type="text" name="last_name"> 

           <label>Email</label>
           <input type="email" name="email"> 

           <label>Comments</label>
           <textarea name="comments"> </textarea>

           <input type="submit" value="Send">
           <p><a href="">RESET</a></p>
        </fieldset>
    </form>

    <?php
// logic - if isset first_name, last_name, etc.,... go. 

// logic of second if statement - if fields are empty, not good. Echo "please fill out all of the fields". But if the fields are not empty, then the else will display and echo the information.

    if (isset(
        $_POST['first_name'],
        $_POST['last_name'],
        $_POST['email'],
        $_POST['comments'] )) {

        $first_name = $_POST['first_name'];
        $last_name  = $_POST['last_name'];
        $email      = $_POST['email'];
        $comments   = $_POST['comments']; 

//  nest another if statemnt in reference to empty fields.
    if (empty(
        $_POST['first_name'] &&
        $_POST['last_name'] &&
        $_POST['email'] &&
        $_POST['comments']  )) {

            echo '<p class="error">Please fill out <b>all</b> the fields.</p>';

    }  else {
        echo '
        <div class = "box">
            <h2>Hello '.$first_name.' '.$last_name.'!</h2>
            <p>We received your email as <b>'.$email.'</b> and will be reviewing your comments: <b>'.$comments.'</b>.</p>
        </div> 
        ';

    } // end else


    } // end isset



    ?>

</body>
</html>


