<?php
session_start();

if (isset($_SESSION["idutilizador"])) {
  require_once 'connectDB.php';
  require_once 'functions.php';
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

    <form action="functions.php" method="get" class="w-100 my-3 align-middle" role="search">
      <input name="search" type="search" class="searchbar form-control input-group-l" placeholder="Pesquisar título, género">
      <button class="btnsearch" type="submit" name="searchbtn" hidden></button>
    </form>

    <?php
    $sql = "SELECT * FROM filmes WHERE destaque=1;";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);

    if ($resultCheck > 0) {
      ?>
      <div id="carouselHighlight" class="carouselbox carousel slide my-2 mx-auto w-100" data-bs-ride="carousel"
        data-bs-touch="true">
        <div class="carousel-indicators">
          <?php
          for ($i = 0; $i < $resultCheck; $i++) {
            echo '<button type="button" data-bs-target="#carouselHighlight" data-bs-slide-to="' . $i . '" class="' . ($i == 0 ? 'active' : '') . '"></button>';
          }
          ?>
        </div>
        <div class="carousel-inner">
          <?php
          $first = true;
          while ($row = mysqli_fetch_array($result)) {
            $image = strtolower($row["nome"]);
            $image = str_replace(' ', '', $image);
            $title = strtoupper($row["nome"]);
            echo '<div class="carousel-item' . ($first ? ' active' : '') . '" data-bs-interval="5000">';
            $first = false;
            ?>
            <img class="carouselimg bd-placeholder-img w-100" src="assets/covers/<?php echo $image; ?>_2.jpg" alt="">
            <div class="container">
              <div class="carousel-caption">
                <h1>
                  <?php echo $title ?>
                </h1>
                <p><a class="carouselbtn btn btn-lg" href="moviedetails.php?id=<?php echo $row["idfilme"]; ?>">Visualizar</a></p>
              </div>
            </div>
          </div>
          <?php
          }
          ?>
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
      <?php
    }
    ?>
    <h1 class="upcoming-releases-title text-white display-5 my-3 ms-3">Próximos Lançamentos</h1>
    <div class="container-fluid px-2">
      <div
        class="row row-cols-xs-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 row-cols-xxl-7 justify-content-start text-center">
        <?php
        $sql = "SELECT * FROM filmes WHERE data > CURDATE() LIMIT 6;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: dbproblems.php");
          exit();
        } else {
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_array($result)) {
              $date = $row["data"];
              $dateObj = DateTime::createFromFormat('Y-m-d', $date);
              $formatteddate = $dateObj->format('d/m/Y');
              $image = strtolower($row["nome"]);
              $image = str_replace(' ', '', $image);
              ?>
              <div class="moviecol col d-flex justify-content-center">
                <a class="customcell">
                  <p class="text-break text-white display-6">
                    <?php echo $formatteddate; ?>
                  </p>
                  <img class="moviecover" src="assets/covers/<?php echo $image; ?>_1.jpg" alt="">
                  <p class="movietitle text-break text-white">
                    <?php echo $row["nome"]; ?>
                  </p>
                </a>
              </div>
              <<?php
            }
          }
        }
        ?>
      </div>
    </div>

    <?php include_once "footer.php" ?>
    <script>
      $(".searchbar").keydown(function(e){
  if (e.keyCode == 13) {
          $(".search-button").click();
  }
});
    </script>
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