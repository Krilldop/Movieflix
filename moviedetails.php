<?php
session_start();

if (isset($_SESSION["idutilizador"])) {
  require_once 'connectDB.php';
  $movieid = $_GET['id'];
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

    <?php
    $sql = 'SELECT F.nome, F.sinopse, F.data, F.trailer, GROUP_CONCAT(DISTINCT C.descricao ORDER BY C.descricao SEPARATOR "/") AS categorias, (SELECT AVG(A.pontuacao) FROM avaliacoes A WHERE A.idfilme = F.idfilme) AS media_pontuacao
    FROM filmes F
    JOIN categoriasfilmes CF ON F.idfilme = CF.idfilme
    JOIN categorias C ON CF.idcategoria = C.idcategoria
    WHERE F.idfilme = ?
    GROUP BY F.idfilme, F.nome, F.sinopse, F.data, F.trailer
    ORDER BY F.nome;';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: dbproblems.php");
      exit();
    } else {
      mysqli_stmt_bind_param($stmt, "i", $movieid);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);
      $row = mysqli_fetch_assoc($result);
      if ($row) {
        $image = strtolower($row["nome"]);
        $image = str_replace(' ', '', $image);
        $date = $row["data"];
        $dateObj = DateTime::createFromFormat('Y-m-d', $date);
        $formatteddate = $dateObj->format('d/m/Y');
        ?>
        <div class="position-relative">
          <img class="background position-absolute" src="assets/covers/<?php echo $image; ?>_2.jpg">
          <div class="fade-overlay position-absolute w-100 h-100"></div>

          <div class="container container-details position-relative mt-5">
            <div class="row">
              <div class="col-md-4 mt-4 text-center">
                <img class="movie-image img-fluid" src="assets/covers/<?php echo $image; ?>_1.jpg" alt="">
              </div>
              <div class="col-md-8 text-white">
                <h2 class="mt-4 fw-bold fs-1">
                  <?php echo $row["nome"]; ?>
                </h2>
                <h3 class="mb-3">
                  <?php
                  if ($row["media_pontuacao"] == 0) {
                    echo 'N/A';
                  } else {
                    echo number_format($row["media_pontuacao"], 1);
                  }
                  ?>
                  <i class="ratingicon fa-solid fa-star"></i>
                </h3>
                <p class="mb-1 fs-4">Lançamento:
                  <?php echo $formatteddate; ?>
                </p>
                <p class="mb-3 fs-4">Género:
                  <?php echo $row["categorias"]; ?>
                </p>
                <p class="text-break">
                  <?php echo $row["sinopse"]; ?>
                </p>
                <div class="mt-3">
                  <h3 class="">Trailer</h3>
                  <iframe class="youtube-trailer" src="<?php echo $row["trailer"]; ?>" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
                </div>
              </div>
            </div>
          </div>
        </div>
        <form action="functions.php" method="post">
          <div class="row d-flex justify-content-center my-4">
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body text-center">
                  <h2 class="card-title text-white fw-bold">Dá a tua opinião!</h2>
                </div>
                <div class="comment-widgets">
                  <div class="d-flex flex-row comment-row">
                    <?php
                    $datalogin = $_SESSION["idutilizador"];

                    $sql = "SELECT utilizador FROM utilizadores WHERE idutilizador=?;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt, $sql)) {
                      header("Location: dbproblems.php");
                      exit();
                    } else {
                      mysqli_stmt_bind_param($stmt, "i", $datalogin);
                      mysqli_stmt_execute($stmt);
                      $result = mysqli_stmt_get_result($stmt);
                      $row = mysqli_fetch_assoc($result);
                      ?>
                      <div class="p-2">
                        <img src="assets/users/user<?php echo $datalogin; ?>.jpg" alt="" class="comment-img rounded-circle">
                      </div>

                      <div class="w-100 me-3">
                        <h5 class="text-white fw-bold">
                          <?php echo $row["utilizador"] ?>
                        </h5>
                        <ul class="rating">
                          <li class="star-icon" data-value="1"></li>
                          <li class="star-icon" data-value="2"></li>
                          <li class="star-icon" data-value="3"></li>
                          <li class="star-icon" data-value="4"></li>
                          <li class="star-icon" data-value="5"></li>
                        </ul>
                        <input type="hidden" id="ratingValue" name="ratingValue" value="">
                        <input type="hidden" name="movieid" value="<?php echo $movieid; ?>">
                        <textarea class="comment-text mb-3 d-block text-white" name="commenttext"
                          placeholder="Adicionar comentário..." required></textarea>
                        <div class="comment-footer mb-3 text-end">
                          <button type="submit" class="publish-btn btn btn-sm text-white fw-bold fs-6"
                            name="publishcomment">Publicar</button>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>

        <div class="row d-flex justify-content-center mb-4">
          <div class="col-lg-9 mx-3">
            <div class="card">
              <div class="card-body text-center">
                <h2 class="card-title text-white fw-bold text-start">Comentários</h2>
              </div>
              <?php
              $datalogin = $_SESSION["idutilizador"];

              $sql = "SELECT U.utilizador,A.idavaliacao , A.idutilizador, A.idfilme, A.pontuacao, A.comentario
                FROM utilizadores U
                JOIN avaliacoes A ON U.idutilizador = A.idutilizador
                WHERE A.idfilme=?
                ORDER BY A.idavaliacao DESC;";
              $stmt = mysqli_stmt_init($conn);
              if (!mysqli_stmt_prepare($stmt, $sql)) {
                header("Location: dbproblems.php");
                exit();
              } else {
                mysqli_stmt_bind_param($stmt, "i", $movieid);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                  while ($row = mysqli_fetch_array($result)) {
                    ?>
                    <div class="comment-widgets">
                      <div class="d-flex flex-row comment-row">
                        <div class="p-2"><img src="assets/users/user<?php echo $row["idutilizador"]; ?>.jpg" alt=""
                            class="comment-img rounded-circle">
                        </div>
                        <div class="w-100 me-3">
                          <h5 class="text-white fw-bold">
                            <?php echo $row["utilizador"]; ?>
                          </h5>
                          <span class="mb-1 d-block text-white text-break">
                            <?php echo $row["comentario"]; ?>
                          </span>
                        </div>
                      </div>
                    </div>
                    <hr class="comment-split border-top my-4">
                    <?php
                  }
                }
                ?>
              </div>
            </div>
          </div>
          <?php
              }
      }
    }
    ?>

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