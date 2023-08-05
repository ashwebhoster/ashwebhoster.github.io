<?php
    include_once 'header.php';
?>

<div class="form">
  <h1>V CREATIONS</h1>
    <form action="includes/signup.inc.php" method="POST">
      
    <input type="text" id="fname" name="name" placeholder="name">
    <input type="text" id="lname" name="email" placeholder="Email">
    <input type="text" id="lname" name="uid" placeholder="Username">
    <input type="password" id="lname" name="pwd" placeholder="Password">
    <input type="password" id="lname" name="pwdrepeat" placeholder="Passwordrepeat">

    <button name="submit" type="submit">Register</button>

    </form>

<?php

  if(isset($_GET["error"])){
    if($_GET["error"] == "emptyinput"){
      echo "<div class="error">Fill all fields</div>";
          }elseif($_GET["error"] == "invaliduid"){
              echo "<div class="error">Invalid username</div>";
          }elseif($_GET["error"] == "invalidemail"){
              echo "<div class="error">Invalid Email</div>";
          
           }elseif($_GET["error"] == "password not match"){
              echo "<div class="error">Password not matching</div>";
          
          }elseif($_GET["error"] == "stmtfailed"){
              echo "<div class="error">contact developers</div>";
          }elseif($_GET["error"] == "usernametaken"){
              echo "<div class="error">username already in use</div>";
            }
  }


?>

<p><a href="login.php">Already have an account, Login</a></p>

</div>



  
  <?php
    include_once 'footer.php';
?>
  

