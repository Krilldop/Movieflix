<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link href="styles/precontent.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/94a81f4df8.js" crossorigin="anonymous"></script>
  <title>Movieflix - Filmes Online</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once "navbar_prelogin.php" ?>

  <div class="container">
    <main>
      <div class="firstdivmargin"></div>

      <div class="content">
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
          <div class="row align-items-center g-lg-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
              <img src="assets/logo-no-background.png" class="d-block mx-lg-auto img-fluid" alt="Movieflix" />
              <p class="col-lg-10 fs-4 text-white">Onde o tempo passa a correr!</p>
            </div>
            <div class="col-md-10 mx-auto col-lg-5">
              <form action="mainpage.php" class="formlogin p-4 p-md-5 rounded-3">
                <div class="formicon form-floating mb-3">
                  <i class="loginicon fa-solid fa-circle-user" alt="Login"></i>
                </div>
                <hr class="my-4" style="color: #FF4C29;">
                <div class="form-floating mb-3">
                  <input type="email" class="form-control">
                  <label>Email</label>
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control">
                  <label>Password</label>
                </div>
                <button class="btnlogin w-100 btn btn-lg" type="submit">Entrar</button>
              </form>
            </div>
          </div>
        </div>

      </div>
    </main>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
