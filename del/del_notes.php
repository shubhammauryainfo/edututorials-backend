<?php 
  session_start();
     
 
  $admin=$_SESSION['admin'];
  if ($admin==true) {
  
  }
  else{
    header("location:../index.html");
  }
include "connect.php";

$No = $_GET["no"];
$query = "SELECT * FROM `notes` WHERE`no` = $No";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_array($result);
unlink("../{$rows['pdf']}");
$sql = "DELETE FROM  `notes` WHERE`no` = $No";

mysqli_query($conn, $sql);

if($conn){
    header("location:../notes.php");
}
mysqli_close($conn);
?>