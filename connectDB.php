<?php
$dBServername = "localhost";
$dBUsername = "id21765018_admin";
$dBPassword = "Admin123@";
$dBName = "id21765018_movieflix";

$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  header("Location: dbproblems.php");
  die("Connection failed: " . mysqli_connect_error());
}