<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link href="styles/precontent.css" rel="stylesheet" />
  <title>Movieflix - Filmes Online</title>
</head>

<body class="d-flex flex-column min-vh-100">
  <?php include_once "navbar_prelogin.php" ?>

  <div class="container">
    <main>
      <div class="firstdivmargin"></div>

      <div class="content row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="title">Carrinho</span>
            <span class="cart1 badge rounded-pill">1</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-sm">
              <div>
                <h6 class="my-0 fw-bold">Plano Básico</h6>
              </div>
              <span class="text-body-secondary">0 €</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (EUR)</span>
              <strong>0 €</strong>
            </li>
          </ul>
        </div>
        <div class="col-md-7 col-lg-8">
          <h4 class="title mb-3">Criar a sua conta</h4>
          <form method="post" action="functions.php">
            <div class="row g-3">

              <div class="col-12">
                <label class="form-label">Utilizador</label>
                <div class="input-group">
                  <span class="input-group-text">@</span>
                  <input type="text" class="form-control" name="username" required />
                </div>
              </div>

              <div class="col-12">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="email" required />
              </div>

              <div class="col-12">
                <label class="form-label">Password</label>
                <input type="password" class="form-control" name="password" required />
              </div>
            </div>

            <button class="btncreateuser w-100 btn btn-primary btn-lg" name="register" type="submit">
              CRIAR CONTA
            </button>
          </form>
        </div>
      </div>
    </main>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
