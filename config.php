<?php

//$conn = mysqli_connect($DBHOST,$DBUSER,$DBPASS,$DBNAME) or die("Connection Failed");


$servername = "localhost";
$database = "i4vision_laravel";
$username = "laravel";
$password = "!4G45aph";
$conn = mysqli_connect($servername, $username, $password, $database);
//$conn = mysqli_connect('localhost','root','','i4vision_laravel');
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
