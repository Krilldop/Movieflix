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

  <div id="carouselHighlight" class="carouselbox carousel slide my-2 mx-auto w-100" data-bs-ride="carousel"
    data-bs-touch="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselHighlight" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#carouselHighlight" data-bs-slide-to="1" class=""></button>
      <button type="button" data-bs-target="#carouselHighlight" data-bs-slide-to="2" class=""></button>
      <button type="button" data-bs-target="#carouselHighlight" data-bs-slide-to="3" class=""></button>
      <button type="button" data-bs-target="#carouselHighlight" data-bs-slide-to="4" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="5000">
        <img class="carouselimg bd-placeholder-img w-100" src="assets/covers/jumanjithenextlevel_2.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>JUMANJI : THE NEXT LEVEL</h1>
            <p><a class="carouselbtn btn btn-lg" href="#">Visualizar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img class="carouselimg bd-placeholder-img w-100" src="assets/covers/asociedadedaneve_2.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>A SOCIEDADE DA NEVE</h1>
            <p><a class="carouselbtn btn btn-lg" href="#">Visualizar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img class="carouselimg bd-placeholder-img w-100" src="assets/covers/aquamaneoreinoperdido_2.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>AQUAMAN E O REINO PERDIDO</h1>
            <p><a class="carouselbtn btn btn-lg" href="#">Visualizar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="5000">
        <img class="carouselimg bd-placeholder-img w-100" src="assets/covers/oppenheimer_2.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>OPPENHEIMER</h1>
            <p><a class="carouselbtn btn btn-lg" href="#">Visualizar</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="carouselimg bd-placeholder-img w-100" src="assets/covers/feriadosangrento_2.jpg" alt="">
        <div class="container">
          <div class="carousel-caption">
            <h1>FERIADO SANGRENTO</h1>
            <p><a class="carouselbtn btn btn-lg" href="#">Visualizar</a></p>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselHighlight" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselHighlight" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <h1 class="upcoming-releases-title text-white display-5 my-3 ms-3">Próximos Lançamentos</h1>
  <div class="container-fluid px-2">
    <div
      class="row row-cols-xs-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 row-cols-xxl-7 justify-content-start text-center">
      <div class="moviecol col d-flex justify-content-center" data-filter="action">
        <a class="customcell" href="#">
        <p class="text-break text-white display-6">18/02/2025</p>
          <img class="moviecover" src="assets/covers/aquamaneoreinoperdido_1.jpg" alt="">
          <p class="movietitle text-break text-white">Aquaman e o Reino Perdido</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="drama">
        <a class="customcell" href="#">
        <p class="text-break text-white display-6">18/02/2025</p>
          <img class="moviecover" src="assets/covers/asociedadedaneve_1.jpg" alt="">
          <p class="movietitle text-break text-white">A Sociedade da Neve</p>
        </a>
      </div>
      <div class="moviecol col d-flex justify-content-center" data-filter="horror">
        <a class="customcell" href="#">
        <p class="text-break text-white display-6">18/02/2025</p>
          <img class="moviecover" src="assets/covers/feriadosangrento_1.jpg" alt="">
          <p class="movietitle text-break text-white">Feriado Sangrento</p>
        </a>
      </div>
    </div>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>