<?php

// errors page to catch errors with foreach loop that counts errors.
// if more than 0 errors, echo message.

if(count($errors) > 0) : ?>
<div class="error">
<?php foreach($errors as $error) :?>
<p><?= $error ?></p>
<?php endforeach; ?>
</div> 
<!-- end error div -->
<?php endif;?>