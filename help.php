<?php
$k = $_POST['id'];
$k = trim($k);
$con = mysqli_connect("localhost" , "root" ,"", "fitsultancy");
$sql = "SELECT * from workout_plan where WDescription = '{$k}'";
$res = mysqli_query($con,$sql);
while($rows = mysqli_fetch_array($res)){?>

<tr>
    <td><?php echo $rows['WPlanId'];  ?></td>
    <td><?php echo $rows['WName'];  ?></td>
    <td><?php echo $rows['WDifficulty'];  ?></td>
    <td><?php echo $rows['WDuration'];  ?></td>
</tr>

<?php
}

    echo $sql;
?>