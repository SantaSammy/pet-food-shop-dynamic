<?php

include('config.php');

class ImagaClass
{    
    public static function echoImage($imageName) {
        global $con;
        
        $sql = "SELECT * FROM `Banner pictures` WHERE name = '" . $imageName . "'";
        $result = mysqli_query($con, $sql);
        $row = $result->fetch_assoc();
                
        echo '<img src="pics/' . $row['image'] . '" class="' . $imageName . '"/>';
    }
}

?>
