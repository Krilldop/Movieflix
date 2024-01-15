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

  <div class="position-relative">
    <img class="background position-absolute" src="assets/covers/oppenheimer_2.jpg">
    <div class="fade-overlay position-absolute w-100 h-100"></div>

    <div class="container container-details position-relative mt-5">
      <div class="row">
        <div class="col-md-4 mt-4 text-center">
          <img class="movie-image img-fluid" src="assets/covers/oppenheimer_1.jpg" alt="">
        </div>
        <div class="col-md-8 text-white">
          <h2 class="mt-4 fw-bold fs-1">Oppenheimer</h2>
          <h3 class="mb-3">5<i class="ratingicon fa-solid fa-star"></i></h3>
          <p class="mb-1 fs-4">Ano: 2023</p>
          <p class="mb-3 fs-4">Género: Ciência</p>
          <p class="text-break">
            A história do envolvimento de J. Robert Oppenheimer na criação da bomba atómica durante a Segunda Guerra
            Mundial.
          </p>
          <div class="mt-3">
            <h3 class="">Trailer</h3>
            <iframe class="youtube-trailer" src="https://www.youtube-nocookie.com/embed/uYPbbksJxIg?si=1i4M5_9OYTw7KApZ"
              title="YouTube video player" frameborder="0"
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row d-flex justify-content-center my-4">
    <div class="col-lg-6">
      <div class="card">
        <div class="card-body text-center">
          <h2 class="card-title text-white fw-bold">Dá a tua opinião!</h2>
        </div>
        <div class="comment-widgets">
          <div class="d-flex flex-row comment-row">
            <div class="p-2"><img src="assets/users/user_1.jpeg" alt="" class="comment-img rounded-circle">
            </div>
            <div class="w-100 me-3">
              <h5 class="text-white fw-bold">Username</h5>
              <ul class="rating">
                <li class="star-icon" data-rating="1"></li>
                <li class="star-icon" data-rating="2"></li>
                <li class="star-icon" data-rating="3"></li>
                <li class="star-icon" data-rating="4"></li>
                <li class="star-icon" data-rating="5"></li>
              </ul>
              <textarea class="comment-text mb-3 d-block text-white"></textarea>
              <div class="comment-footer mb-3 text-end">
                <button type="button" class="publish-btn btn btn-sm text-white fw-bold fs-6">Publicar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row d-flex justify-content-center mb-4">
    <div class="col-lg-9 mx-3">
      <div class="card">
        <div class="card-body text-center">
          <h2 class="card-title text-white fw-bold text-start">Comentários</h2>
        </div>
        <div class="comment-widgets">
          <div class="d-flex flex-row comment-row">
            <div class="p-2"><img src="assets/users/user_1.jpeg" alt="" class="comment-img rounded-circle">
            </div>
            <div class="w-100 me-3">
              <h5 class="text-white fw-bold">Username</h5>
              <span class="mb-1 d-block text-white text-break">Thanks bbbootstrap.com for providing such useful
                snippets. </span>
            </div>
          </div>
        </div>
        <hr class="comment-split border-top my-4">
        <div class="comment-widgets">
          <div class="d-flex flex-row comment-row">
            <div class="p-2"><img src="assets/users/user_1.jpeg" alt="" class="comment-img rounded-circle">
            </div>
            <div class="w-100 me-3">
              <h5 class="text-white fw-bold">Username</h5>
              <span class="mb-1 d-block text-white text-break">Thanks bbbootstrap.com for providing such useful
                snippets. </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>