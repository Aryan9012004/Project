<?php
$insert = false;
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";
    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $fitnesslevel = $_POST['fitnesslevel'];
    $fitnessgoal = $_POST['fitnessgoal'];
    $dob = $_POST['dob'];
    $gender= $_POST['gender'];
    $sql = "INSERT INTO `fitsultancy`.`user_table` (`UserName`, `UserEmail`, `UserPassword`, `UserMobile`, `UserDOB`, `UserGender`, `FitnessLevel`, `FitnessGoal`) 
    VALUES ('$name', '$email', '$password', '$phone', '$dob', '$gender', '$fitnesslevel', '$fitnessgoal');";
    if($con->query($sql) == true){
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}
?>