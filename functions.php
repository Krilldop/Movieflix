<?php

if (isset($_POST["register"])) {
  require_once 'connectDB.php';
  $utilizador = $_POST["utilizador"];
  $email = $_POST["email"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  if (empty($utilizador) || empty($email) || empty($password)) {
    echo "<script>alert('Preencha todos os campos'); window.location.href = 'register.php';</script>";
    exit();
  }

  $sql = "SELECT * from utilizadores WHERE utilizador=? OR email=?";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: dbproblems.php");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ss", $utilizador, $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $resultCheck = mysqli_num_rows($result);
  while ($row = mysqli_fetch_array($result)) {
    if ($row["utilizador"] == $utilizador) {
      echo "<script>alert('Utilizador já associado a uma conta'); window.location.href = 'register.php';</script>";
      exit();
    }
    if ($row["email"] == $email) {
      echo "<script>alert('Email já associado a uma conta'); window.location.href = 'register.php';</script>";
      exit();
    }
  }

  $sql = "INSERT INTO utilizadores(utilizador,email,password) VALUES (?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: dbproblems.php");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "sss", $utilizador, $email, $password);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  echo "<script>alert('Conta criada com sucesso!'); window.location.href = 'login.php';</script>";
  exit();
}

if (isset($_POST["login"])) {
  require_once 'connectDB.php';
  $email = $_POST["email"];
  $password = $_POST["password"];
  $alert = "<script>alert('Credenciais incorretas'); window.location.href = 'login.php';</script>";
  $emailExists = emailExists($conn, $email);

  if (!$emailExists) {
    echo $alert;
    exit();
  }

  $pwdHashed = $emailExists["password"];
  $checkPwd = password_verify($password, $pwdHashed);

  if (!$checkPwd) {
    echo $alert;
    exit();
  }
  session_start();
  $_SESSION["idutilizador"] = $emailExists["idutilizador"];
  header("Location: mainpage.php");
  exit();
}

if (isset($_POST["logout"])) {
  session_start();
  session_unset();
  session_destroy();
  header("Location: login.php");
  exit();
}

function emailExists($conn, $email)
{
  $sql = "SELECT * FROM utilizadores WHERE email = ?";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: dbproblems.php");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);
  $row = mysqli_fetch_assoc($result);

  if ($row) {
    mysqli_stmt_close($stmt);
    return $row;
  } else {
    mysqli_stmt_close($stmt);
    return false;
  }
}

if (isset($_GET["searchbtn"])) {
  $search = $_GET["search"];
  header('Location: movies.php?search=' . urlencode($search));
  exit();
}

if (isset($_POST["updateusers"])) {
  session_start();
  $idutilizador = $_SESSION["idutilizador"];
  $utilizador = $_POST["username"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $file = $_FILES['file'];
  $fileName = $_FILES['file']['name'];
  $fileTmpName = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileExt = explode('.', $fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array('jpg');

  require_once 'connectDB.php';

  if (empty($utilizador) || empty($email)) {
    echo "<script>alert('Não é possível editar o perfil com todos os campos vazios!'); window.location.href = 'editprofile.php';</script>";
    exit();
  }
  if (empty($password)) {
    $sql = "UPDATE utilizadores SET utilizador = ?, email = ?  WHERE idutilizador = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: dbproblems.php");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "ssi", $utilizador, $email, $idutilizador);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
    }
  } else {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "UPDATE utilizadores SET utilizador = ?, email = ?, password = ?  WHERE idutilizador = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: dbproblems.php");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "sssi", $utilizador, $email, $hashedPassword, $idutilizador);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_close($stmt);
    }
  }

  if (isset($_FILES['file'])) {
    if ($fileSize > 0) {
      if (!in_array($fileActualExt, $allowed)) {
        echo "<script>alert('Apenas são permitidas imagens com extensão .jpg'); window.location.href = 'editprofile.php';</script>";
        exit();
      }
      if ($fileError != 0) {
        echo "<script>alert('Houve um problema no envio da imagem'); window.location.href = 'editprofile.php';</script>";
        exit();
      }
      if ($fileSize > 1048576) {
        echo "<script>alert('Tamanho da imagem além do permitido (1MB)'); window.location.href = 'editprofile.php';</script>";
        exit();
      }
      $fileNameNew = "user" . $idutilizador . "." . $fileActualExt;
      $fileDestination = 'assets/users/' . $fileNameNew;
      move_uploaded_file($fileTmpName, $fileDestination);
    }
    echo "<script>alert('Perfil atualizado com sucesso'); window.location.href = 'profile.php';</script>";
    exit();
  }
}

if (isset($_POST["publishcomment"])) {
  require_once 'connectDB.php';
  session_start();
  $userid = $_SESSION["idutilizador"];
  $rating = $_POST['ratingValue'];
  $comment = $_POST["commenttext"];
  $movieid = $_POST["movieid"];

  $sql = "INSERT INTO avaliacoes(idutilizador, idfilme, pontuacao, comentario) VALUES (?,?,?,?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("Location: dbproblems.php");
    exit();
  } else {
    mysqli_stmt_bind_param($stmt, "iiis", $userid, $movieid, $rating, $comment);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo '<script>alert("Comentário publicado!"); window.location.href = "moviedetails.php?id=' . $movieid . '";</script>';
    exit();
  }
}