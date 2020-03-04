<?php include('Server.php'); ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>English Grandma</title>
    <link rel="stylesheet" href="_Login Pages Styles.css" type="text/css" media="all">

</head>

<body>

<div class="totalparent">
<!-- Total Parent Allows CSS To Move-->
  <div class="grandmachild">
<!-- English Grandma Logo Box-->
    <div class="GrandmaLogo">
<!-- Grandma Logo Image-->
      <img src="English Grandma Logo.jpg" width="433px" height="384px">
    </div>
  </div>

  <div class ="regchild">
<!-- Register Is Inside A Second Child of Body for CSS-->
        <div class = "regbox">
            <h2>Sign Up</h2>
        </div>
<!-- PHP Registration Form-->
        <form method="post" action="Register.php">
          <!-- Display Validation Errors Here-->
          <?php include('errors.php'); ?>


          <div class = "input-group">
             <label>Username</label>
             <input type= "text" name="username">
          </div>
          <div class = "input-group">
             <label>Email</label>
             <input type= "email" name="email">
          </div>
          <div class = "input-group">
             <label>Password</label>
             <input type= "password" name="password_1">
          </div>
          <div class = "input-group">
             <label>Confirm Password</label>
             <input type= "password" name="password_2">
          </div>
          <div class = "input-group">
             <button type= "submit" name="register" class="btn">Sign Up</button>
          </div>
          <p> Already a member? <a href="Login.html"> Log In </a> </p>


        </form>
    </div>
</div>



</body>

</html>
