<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();


if (isset($_POST["logout"])) {
  session_start();
  session_unset();
  session_destroy();
  header("Location: login.php");
  exit();
}


if (isset($_POST["login"])) {

  $email = $_POST["email"];
  $password = $_POST["password"];

  require_once 'connectDB.php';

  $emailExists = emailExists($conn, $email);

  if ($emailExists === false) {
    echo "<script>alert('Credenciais incorretas'); window.location.href = 'login.php';</script>";
    exit();
  }

  /*$pwdHashed = $emailExists["password"];
  $checkPwd = password_verify($password, $pwdHashed);

  if ($checkPwd === false) {
    echo "<script>alert('Credenciais incorretas'); window.location.href = 'login.php';</script>";
    exit();
  }
  else if ($checkPwd === true) {*/
  session_start();
  $_SESSION["idutilizador"] = $emailExists["idutilizador"];
  header("Location: mainpage.php");
  exit();
}
//}
else {
  header("Location: mainpage.php");
  exit();
}












function emailExists($conn, $email) {
  $sql = "SELECT * FROM utilizadores WHERE email = ?";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: dbproblemas.php");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return true;
  } else {
    return false;
  }
  mysqli_stmt_close($stmt);
}
?>


