<?php
$dBServername = "localhost";
$dBUsername = "root";
$dBPassword = "Admin123@";
$dBName = "movieflix";

$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

if (!$conn) {
  header("Location: dbproblems.php");
  die("Connection failed: " . mysqli_connect_error());
}