<?php
  $dBServername = "localhost";
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "movieflix";

  $conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}







  /*
  if (!$conn) {
    header("Location: dbproblems.php");
    die();
  }
*/
?>
