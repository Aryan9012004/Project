<?php

include("conn.php");
if(isset($_POST["submit"])){
        $username = $_POST["email"];
        $password = $_POST["password"];

        $sql = "select * from user_table where UserEmail = '$username' and UserPassword ='$password'";

        $result = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($result , MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1){
            header ("Location:index.html");
        }
        else{
            echo "<script>
            window.location.href = 'login.php';
            alert('Login Failed')
            </script>";
        }
    }
?>