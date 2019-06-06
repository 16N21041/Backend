<?php
session_start();
require "connection1.php";
$user_check=$_SESSION['email'];
$ses_sql=mysqli_query($conn,"select email from t1 where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];   
if(!isset($login_session)){
mysqli_close($conn); 
header('Location: uindex.php'); 
}
?>
