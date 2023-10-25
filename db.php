<?php
$localhost = "localhost";
$username = "root";
$password = "";
$db = "form";


$conn = mysqli_connect($localhost,$username,$password,$db);

if(mysqli_errno($conn)){
    echo "failed to connect to Mysql " . mysqli_connect_error();
}
?>