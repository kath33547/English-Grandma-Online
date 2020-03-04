<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "chocolate";
$db = "hello";

$con = mysqli_connect($dbhost, $dbuser, $dbpass) or die("Connection failed: " . mysqli_connect_error());

$db = mysqli_select_db($con, $db);

echo "success!";







?>
