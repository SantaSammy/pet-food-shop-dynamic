<?php

$servername = "k2fqe1if4c7uowsh.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "d5iqslr5d9xtf5e7";
$password = "nce2zlolndscddyi";
$dbname = "lfp4a5owsypo4d6o";

$con = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}

$test1 = "SELECT * FROM Product WHERE id = 1";
$test1r = mysqli_query($con, $test1);
$test1a = mysqli_fetch_assoc($test1r);

?>
