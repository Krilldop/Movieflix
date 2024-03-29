<?php
session_start();

if (isset($_SESSION["idutilizador"])) {
  require_once 'connectDB.php';
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

    <div class="container">
      <main>
        <div class="text-center">
          <img class="d-block mx-auto mb-4 my-5" src="assets/undraw_coffee_break.svg" alt="" width="40%">
          <br>
          <h1 class="display-5 fw-bold text-white">Em construção...</h1>
        </div>

      </main>
    </div>

    <?php include_once "footer.php" ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
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