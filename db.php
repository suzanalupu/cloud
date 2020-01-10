<?php

$servername = "localhost";
$username = "root";
$password = "";
$db = "onlineshop";

// Create connection
$con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "online-shopping-server.mysql.database.azure.com", "suzanalupu@online-shopping-server", {your_password}, {your_database}, 3306);


// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
