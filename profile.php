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
      <form action="functions.php" method="post">

        <div class="d-flex w-50 m-auto justify-content-center align-items-center">

          <div class="profile p-3 text-center">
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
            <img class="profilepic img-fluid rounded-circle" src="assets/users/user<?php echo $row["idutilizador"]; ?>.jpg" alt=""
              onerror="replaceEmptySrc(this)">
            <h3 class="display-5 text-white"><?php echo $row["utilizador"]; ?></h3>
            <h5 class="display-8 text-white"><?php echo $row["email"]; ?></h5>
            <a class="editprofilebtn btn fw-bold text-white mt-2" href="editprofile.php">Editar Perfil</a>
          </div>
        </div>
      </form>
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