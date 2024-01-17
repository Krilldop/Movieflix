<?php
session_start();

if (isset($_SESSION["idutilizador"])) {
  require_once 'connectDB.php';
  require_once 'functions.php';
  ?>
  <!DOCTYPE html>
  <html lang="pt">

  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link href="styles/maincontent.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/94a81f4df8.js" crossorigin="anonymous"></script>
    <title>Movieflix - Filmes Online</title>
  </head>

  <body class="d-flex flex-column min-vh-100">
    <?php include_once "navbar_postlogin.php" ?>

    <div class="container m-auto">
      <div class="editprofilecontainer w-50 mx-auto my-3 d-flex justify-content-center align-items-center">

        <form action="functions.php" method="post" enctype="multipart/form-data">
          <?php
          $datalogin = $_SESSION["idutilizador"];

          $sql = "SELECT * FROM utilizadores WHERE idutilizador=?;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: dbproblems.php");
            exit();
          } else {
            mysqli_stmt_bind_param($stmt, "i", $datalogin);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            $row = mysqli_fetch_assoc($result);
          }
          ?>

          <h4 class="display-4 fs-1 text-white">Editar Perfil</h4><br>
          <div class="mb-3 w-90">
            <label class="form-label text-white">Utilizador</label>
            <input type="text" class="form-control" name="username" value="<?php echo $row["utilizador"]; ?>" maxlength="20" required>
          </div>

          <div class="mb-3">
            <label class="form-label text-white">Email</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row["email"]; ?>" maxlength="80" required>
          </div>

          <div class="mb-3">
            <label class="form-label text-white">Password</label>
            <input type="password" class="form-control" name="password" value="">
          </div>

          <div class="mb-3">
            <label class="form-label text-white">Profile Picture</label>
            <input type="file" class="form-control" name="file">
            <img class="userpic rounded-circle mt-3"
              src="assets/users/user<?php echo $row["idutilizador"]; ?>.jpg" alt=""
              onerror="replaceEmptySrc(this)">
            <input type="text" hidden="hidden" name="olduserimage" value="">
          </div>

          <button type="submit" class="btn editprofilebtn text-white fw-bold mb-2" name="updateusers">Atualizar</button>
        </form>
      </div>
    </div>

    <?php include_once "footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="scripts/main.js"></script>
  </body>

  </html>
  <?php
} else {
  ?>
  <script type="text/javascript">
    window.location.href = 'error.php';
  </script>
  <?php
}
?>