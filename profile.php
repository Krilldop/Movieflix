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

      <div class="d-flex justify-content-center align-items-center">

        <div class="profile p-3 text-center">
          <img class="profilepic img-fluid rounded-circle" src="assets/users/user_1.jpeg" alt="" onloadstart="replaceEmptySrc(this)">
          <h3 class="display-5 text-white">Username</h3>
          <h5 class="display-8 text-white">example@example.com</h5>
          <a class="editprofilebtn btn fw-bold text-white mt-2" href="editprofile.php">Editar Perfil</a>
        </div>
      </div>
    </form>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
