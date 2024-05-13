<?php 
//   session_start();
     
 
//   $admin=$_SESSION['admin'];
//   if ($admin==true) {
  
//   }
//   else{
//     header("location:../login.html");
//   }
include "connect.php";

$No = $_GET["no"];

$sql = "DELETE FROM  `form_response` WHERE`No` = $No";

mysqli_query($conn, $sql);

if($conn){
    header("location:../dashboard.php");
}
mysqli_close($conn);
?>