<?php
    include_once 'header.php';
?>

<div class="form">
  <h1>V CREATIONS</h1>
    <form action="includes/login.inc.php" method="POST">
      
    <input type="text" id="fname" name="uid" placeholder="Username">
    <input type="password" id="lname" name="pwd" placeholder="Password">
    <button name="submit" type="submit">Login</button>
</form>

<p><a href="signup.php">To Register</a></p>  

    </div>
  
  <?php
    include_once 'footer.php';
?>
  

