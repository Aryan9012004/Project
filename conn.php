<?php
    $conn = new mysqli("localhost","root","","fitsultancy");
    if($conn->connect_error){
        die("Connection failed" .$conn->connect_error);
    }

    
   
?>