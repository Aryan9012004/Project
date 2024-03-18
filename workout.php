<?php
    $con = mysqli_connect("localhost" , "root" ,"", "fitsultancy");
    $sql = "SELECT Distinct WDescription from workout_plan";
    $res = mysqli_query($con,$sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>FitSultancy - Fitness Consultancy Hub</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<style>
    th{
        width: 10%;
    }
    tbody{
        text-align: center;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
    function selectmuscle(){
        var x =document.getElementById("muscle").value;
        $.ajax({
            url:"help.php",
            method:"POST",
            data:{
                id : x
            },
            success:function(data){
                $("#ans").html(data);
            }
        })


    }
</script>
<body>
<div class="hero_area">
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              FitSultancy
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link" href="workout.php"> Fitness Plan </a>
                </li>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="diet.html">Diet Plan</a>
                </li>
                <li class="nav-item">
                  <div class="dropdown">
                    <button class="dropbtn">Tools</button>
                    <div class="dropdown-content">
                      <a href="bmi.html">BMI</a>
                      <a href="kgtopd.html">Kg ⇆ Pounds</a>
                      <a href="height.html">Height in cm</a>
                    </div>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Blogs.html">Blogs</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="Suppliment.html">Suppliments</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="login.php">LogOut</a>
                </li>
              </ul>
              <div class="user_option">
                <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                </form>
              </div>
            </div>
          </div>
        </nav>
      </div>
    </header>

   <h1> Select Workout Muscle Group :- </h1>
    <select name="muscle" id="muscle" onchange="selectmuscle()">
        <?php
        
        while($rows = mysqli_fetch_array($res)){
            ?>
        <option value="<?php echo $rows['WDescription'] ?>"> <?php  echo $rows['WDescription']  ?> </option>
        <?php
        }
        ?>
    </select>

    <table>
        <thead>
            <th>Plan Id</th>
            <th>Workout Name</th>
            <th>Workout Difficulty</th>
            <th>Workout Duration<br>in minutes</th>
        </thead>
        <tbody id="ans">

        </tbody>
    </table>
    </div>
</body>
</html>