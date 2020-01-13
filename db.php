<?php

$servername = 'online-shopping-system.mysql.database.azure.com';
$username = 'suzanalupu@online-shopping-server';
$password = 'Suzana@96';
$db = 'onlineshop';

// Create connection



// $con=mysqli_init(); mysqli_ssl_set($con, NULL, NULL, {ca-cert filename}, NULL, NULL); mysqli_real_connect($con, "online-shopping-server.mysql.database.azure.com", "suzanalupu@online-shopping-server", {your_password}, {your_database}, 3306);

//$con = mysqli_connect($servername, $username, $password,$db);

$con = mysqli_init();
mysqli_real_connect($con, $servername, $username, $password, $db, 3306);
// Check connection
//if (!$con) {
  //  die("Connection failed: " . mysqli_connect_error());
//}
if (mysqli_connect_errno($con)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}


?>
