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
    <div class="editprofilecontainer m-auto d-flex justify-content-center align-items-center">

      <form action="profile.php" method="post">

        <h4 class="display-4 fs-1 text-white">Editar Perfil</h4><br>
        <div class="mb-3">
          <label class="form-label text-white">Username</label>
          <input type="text" class="form-control" name="username" value="Username">
        </div>

        <div class="mb-3">
          <label class="form-label text-white">Email</label>
          <input type="text" class="form-control" name="email" value="example@example.com">
        </div>

        <div class="mb-3">
          <label class="form-label text-white">Password</label>
          <input type="password" class="form-control" name="password" value="">
        </div>

        <div class="mb-3">
          <label class="form-label text-white">Profile Picture</label>
          <input type="file" class="form-control" name="userimage">
          <img class="userpic rounded-circle mt-3" src="assets/users/user_1.jpeg" alt="">
          <input type="text" hidden="hidden" name="olduserimage" value="userx">
        </div>

        <button type="submit" class="btn editprofilebtn text-white fw-bold mb-2">Atualizar</button>
      </form>
    </div>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
