<?php
session_start();
    include("conn.php"); 
    
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Log-In </title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="container">
      <form action="func.php" method="post" onsubmit="return isvalid()">
        <div class="title">Login</div>
        <div class="input-box underline">
          <input type="text" id="mail" name="email" placeholder="Enter Your Email" >
          <div class="underline"></div>
        </div>
        <div class="input-box">
          <input type="password" id="pass" name="password"placeholder="Enter Your Password" >
          <div class="underline"></div>
        </div>
        <input type="submit" id="pass"value="Login" name="submit"><br>
        Create a new account: <a href="registration.html">Sign Up</a>  
    </form>
      
    </div>
  </body>
  <script>
    </script>
</html>