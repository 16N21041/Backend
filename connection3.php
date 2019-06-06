<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "players";
$conn3 = mysqli_connect($server, $username, $password, $db);
if($conn3 != true){
    echo "Error in Connection.......!";
}
?>