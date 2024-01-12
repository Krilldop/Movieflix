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

  <div class="px-4 py-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/logo-no-background.png" alt="" width="250" height="60" />
    <div class="col-lg-6 mx-auto" style="max-width: 800px">
      <p class="lead mb-4 text-white fw-bold">Este trabalho para a UC de Sistemas de Informação em Rede foi realizado
        com o objetivo de criar uma aplicação web para gestão de filmes e/ou séries, com foco na criação de um sistema
        completo e colaborativo para os utilizadores.</p>
    </div>
  </div>

  <div class="splitcontent"></div>

  <h1 class="title display-4 fw-bold">Equipa</h1>
  <div class="container-fluid hero-container">
    <div class="row">
      <div class="col-md-6 hero-column mb-4">
        <img src="assets/foto1.jpeg" alt="" class="img-fluid">
        <div class="caption">
          <h3>Daniel Trindade</h3>
          <p>Nº Aluno: 28245 </p>
        </div>
      </div>
      <div class="col-md-6 hero-column">
        <img src="assets/foto2.jpeg" alt="" class="img-fluid">
        <div class="caption">
          <h3>João Ralha</h3>
          <p>Nº Aluno: 28246</p>
        </div>
      </div>
    </div>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

