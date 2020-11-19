<?php

include('config.php');

global $con;
$sql = "SELECT * FROM Items WHERE id = 1";
$footer = mysqli_query($con, $sql);
$footerContent = mysqli_Fetch_assoc($footer);

?>
