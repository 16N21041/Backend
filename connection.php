<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "admin";
$conn = mysqli_connect($server, $username, $password, $db);
if($conn != true){
    echo "Error in Connection.......!";
}
?>