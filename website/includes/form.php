
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])  ;?>" method="post">
<fieldset>
    <legend>  Contact Anne  </legend>

    <label>First name</label>
    <span class="error"><?php echo $first_name_err ;?></span>
    <input type="text" name="first_name" value="<?php if(isset($_POST['first_name'])) echo htmlspecialchars($_POST['first_name']) ;?>">

    <label>Last name</label>
    <span class="error"><?php echo $last_name_err ;?></span>
    <input type="text" name="last_name" value="<?php if(isset($_POST['last_name'])) echo htmlspecialchars($_POST['last_name']) ;?>">

    <label>Email</label>
    <span class="error"><?php echo $email_err ;?></span>
    <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email']) ;?>">

   <label>Gender</label>
   <span class="error"><?php echo $gender_err ;?></span>
    <ul>
     <li>
      <input type="radio" name="gender" value="female" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'female') echo 'checked = "checked"'    ;?>> Female
     </li>
     <li>
     <input type="radio" name="gender" value="male" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'male') echo 'checked = "checked"'    ;?>> Male
     </li>
     <li>
      <input type="radio" name="gender" value="neither" <?php if(isset($_POST['gender']) && $_POST['gender'] == 'neither') echo 'checked = "checked"'    ;?>> Neither
     </li>
    </ul>

    <label>Phone</label>    <span class="error"><?php echo $phone_err ;?></span>
    <input type="tel" name="phone" placeholder="xxx-xxx-xxxx" value="<?php if(isset($_POST['phone'])) echo htmlspecialchars($_POST['phone']) ;?>">

    <label>Select Courses</label>
    <span class="error"><?php echo $course_err ;?></span>
    <ul>
  
        <li>
    <input type="checkbox" name="course[]" value="art" <?php if(isset($_POST['course']) && in_array('art', $course)) echo 'checked = "checked"' ;?>> Art History
        </li>
        <li>
    <input type="checkbox" name="course[]" value="calculus" <?php if(isset($_POST['course']) && in_array('calculus', $course)) echo 'checked = "checked"' ;?>> Calculus
        </li>
        <li>
    <input type="checkbox" name="course[]" value="eng" <?php if(isset($_POST['course']) && in_array('eng', $course)) echo 'checked = "checked"' ;?>> English Literature
        </li>
        <li>
    <input type="checkbox" name="course[]" value="robot" <?php if(isset($_POST['course']) && in_array('robot', $course))echo 'checked = "checked"' ;?>> Robotics
        </li>
        <li>
    <input type="checkbox" name="course[]" value="carpentry" <?php if(isset($_POST['course']) && in_array('carpentry', $course)) echo 'checked = "checked"' ;?>> Carpentry
        </li>
    </ul>

    <label>Campus</label>
    <span class="error"><?php echo $campus_err ;?></span>
    <select name="campus">
    <option value="" NULL <?php if(isset($_POST['campus']) && $_POST['campus'] == NULL) echo 'selected = "unselected"' ;?>> Select one</option>
    <option value="sea" <?php if(isset($_POST['campus']) && $_POST['campus'] == 'sea') echo 'selected = "selected"' ;?>> Seattle</option>
    <option value="bot" <?php if(isset($_POST['campus']) && $_POST['campus'] == 'bot') echo 'selected = "selected"' ;?>> Bothell</option>
    <option value="tac" <?php if(isset($_POST['campus']) && $_POST['campus'] == 'tac') echo 'selected = "selected"' ;?>> Tacoma</option>
    <option value="har" <?php if(isset($_POST['campus']) && $_POST['campus'] == 'har') echo 'selected = "selected"' ;?>> Harborview</option>
    <option value="mon" <?php if(isset($_POST['campus']) && $_POST['campus'] == 'mon') echo 'selected = "selected"' ;?>> Montlake</option>
    </select>

    <label>Comments</label>
    <span class="error"><?php echo $comments_err ;?></span>
    <textarea name="comments"><?php if(isset($_POST['comments'])) echo htmlspecialchars($_POST['comments']) ;?></textarea>

    <label>Privacy</label>
    <span class="error"><?php echo $privacy_err ;?></span>
    <ul>
     <li>
      <input type="radio" name="privacy" value="yes" <?php if(isset($_POST['privacy']) && $_POST['privacy'] == 'yes') echo 'checked = "checked"'    ;?>> Privacy
     </li>
    </ul>

    <input type="submit" value="Send">

    <input type="button" onclick="window.location.href='<?php echo $_SERVER['PHP_SELF'] ;?>'" value="Reset">

</fieldset>
</form>
