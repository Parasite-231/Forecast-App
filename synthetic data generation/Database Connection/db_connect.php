<?php

$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "sensor_database";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Oops!! There was a problem in server connection : " . $conn->connect_error);
}
?>