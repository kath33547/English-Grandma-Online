<?php

  //$username = "";
  //$email = "";
  $errors = array();

  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "chocolate";
  $db = "test";


    //connect to the database
  $con = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

    //if the register button is clicked
  if (isset($_POST['register'])) {

    
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password_1 = mysqli_real_escape_string($con, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($con, $_POST['password_2']);
      //ensure that form fields are filled properly
      if (empty($username)) {
          array_push($errors, "Username is required"); //add error to errors array
            }
      if (empty($email)) {
          array_push($errors, "Email is required");
            }
      if (empty($password_1)) {
          array_push($errors, "Password is required");
            }
      if ($password_1 != $password_2){
          array_push($errors, "The two passwords do not match");
            }
      //if there are not errors, save user to database
      if (count($errors) == 0){
          $password = md5($password_1); //encrypt password before storing in database (security)
          $sql = "INSERT INTO users (username, email, password)
                      VALUES ('$username', '$email', '$password')";
          mysqli_query($con, $sql);


            }

      }




 ?>
