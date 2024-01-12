<?php
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
  $sql = "SELECT * FROM utilizadores WHERE email = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: dbproblemas.php");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }
  mysqli_stmt_close($stmt);
}
?>