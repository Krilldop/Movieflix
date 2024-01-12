<?php
  $dBServername = "localhost";
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "movieflix";

  @$conn = mysqli_connect($dBServername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    header("Location: dbproblems.php");
    die();
  }

?>
