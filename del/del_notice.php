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
$query = "SELECT * FROM `notice` WHERE`no` = $No";
$result = mysqli_query($conn,$query);
$rows = mysqli_fetch_array($result);
unlink("../{$rows['pdf']}");
$sql = "DELETE FROM  `notice` WHERE`no` = $No";

mysqli_query($conn, $sql);

if($conn){
    header("location:../notice.php");
}
mysqli_close($conn);
?>