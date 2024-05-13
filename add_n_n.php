<?php 
  session_start();
     
 
  $admin=$_SESSION['admin'];
  if ($admin==true) {
  
  }
  else{
    header("location:index.html");
  }
include("connect.php");


$content = $_POST["content"];
$class=$_POST["class"];
$date = $_POST["date"];
$table = $_POST["table"];
$pdf = $_FILES['pdf']['name'];

$target_dir = "pdf/";
$target_file = $target_dir.$pdf;
move_uploaded_file($_FILES['pdf']['tmp_name'],"$target_file");


$sql = "INSERT INTO `$table`(`no`,`content`, `class`, `date`, `pdf`) VALUES (NULL,'$content','$class','$date','$target_file')";

    if (mysqli_query($conn, $sql)) {
        header("location:dashboard.php");

        } 
        else {
        echo mysqli_error($conn);
    }

    mysqli_close($conn);


?>