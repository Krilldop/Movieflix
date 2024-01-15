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

  <form action="#" class="w-100 my-3 align-middle" role="search">
    <input type="search" class="searchbar form-control input-group-l" placeholder="Pesquisar título, género">
  </form>

  <div class="row mx-auto my-4  justify-content-center align-items-center">1
    <div class="col mb-2 d-flex">
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" data-filter="all"
        onclick="filterBtn(this)">Tudo</button>
    </div>
    <div class="col mb-2 d-flex">
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" data-filter="action"
        onclick="filterBtn(this)">Ação</button>
    </div>
    <div class="col mb-2 d-flex">
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" data-filter="science"
        onclick="filterBtn(this)">Ciência</button>
    </div>
    <div class="col mb-2 d-flex">
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" data-filter="drama"
        onclick="filterBtn(this)">Drama</button>
    </div>
    <div class="col mb-2 d-flex">
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" data-filter="fantasy"
        onclick="filterBtn(this)">Fantasia</button>
    </div>
    <div class="col mb-2 d-flex">
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" data-filter="horror"
        onclick="filterBtn(this)">Terror</button>
    </div>
  </div>

  <div class="container-fluid px-2">
    <div
      class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 row-cols-xxl-7 justify-content-start text-center">
      <div class="moviecol col d-flex justify-content-center" data-filter="action">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/aquamaneoreinoperdido_1.jpg" alt="">
          <p class="movietitle text-break text-white">Aquaman e o Reino Perdido</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="drama">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/asociedadedaneve_1.jpg" alt="">
          <p class="movietitle text-break text-white">A Sociedade da Neve</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="horror">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/feriadosangrento_1.jpg" alt="">
          <p class="movietitle text-break text-white">Feriado Sangrento</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="fantasy">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/jumanjithenextlevel_1.jpg" alt="">
          <p class="movietitle text-break text-white">Jumanji:The Next Level </p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="science">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/oppenheimer_1.jpg" alt="">
          <p class="movietitle text-break text-white">Oppenheimer</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="science">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/oppenheimer_1.jpg" alt="">
          <p class="movietitle text-break text-white">Oppenheimer</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="science">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/oppenheimer_1.jpg" alt="">
          <p class="movietitle text-break text-white">Oppenheimer</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="science">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/oppenheimer_1.jpg" alt="">
          <p class="movietitle text-break text-white">Oppenheimer</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="drama">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/asociedadedaneve_1.jpg" alt="">
          <p class="movietitle text-break text-white">A Sociedade da Neve</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="horror">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/feriadosangrento_1.jpg" alt="">
          <p class="movietitle text-break text-white">Feriado Sangrento</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="fantasy">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/jumanjithenextlevel_1.jpg" alt="">
          <p class="movietitle text-break text-white">Jumanji:The Next Level </p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="drama">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/asociedadedaneve_1.jpg" alt="">
          <p class="movietitle text-break text-white">A Sociedade da Neve</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="horror">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/feriadosangrento_1.jpg" alt="">
          <p class="movietitle text-break text-white">Feriado Sangrento</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="fantasy">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/jumanjithenextlevel_1.jpg" alt="">
          <p class="movietitle text-break text-white">Jumanji:The Next Level </p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="action">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/aquamaneoreinoperdido_1.jpg" alt="">
          <p class="movietitle text-break text-white">Aquaman e o Reino Perdido</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="action">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/aquamaneoreinoperdido_1.jpg" alt="">
          <p class="movietitle text-break text-white">Aquaman e o Reino Perdido</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="drama">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/asociedadedaneve_1.jpg" alt="">
          <p class="movietitle text-break text-white">A Sociedade da Neve</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="drama">
        <a class="customcell" href="#">
          <img class="moviecover" src="assets/covers/asociedadedaneve_1.jpg" alt="">
          <p class="movietitle text-break text-white">A Sociedade da Neve</p>
        </a>
      </div>

    </div>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>