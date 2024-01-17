<?php
session_start();

if (isset($_SESSION["idutilizador"])) {
  require_once 'connectDB.php';
  require_once 'functions.php';
  $search = isset($_GET['search']) ? $_GET['search'] : '';
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
      <input name="search" type="search" class="searchbar form-control input-group-l"
        placeholder="Pesquisar título, género">
      <button class="btnsearch" type="submit" name="searchbtn" hidden></button>
    </form>
    <?php
    if (!$search) {
      ?>
      <div class="row mx-auto my-4  justify-content-center align-items-center">
        <div class="col mb-2 d-flex">
          <button type="button" class="genrebtn btn mx-1 text-white fw-bold" data-filter="all"
            onclick="filterBtn(this)">Tudo</button>
        </div>
        <?php
        $sql = "SELECT * FROM categorias ORDER BY descricao";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        while ($row = mysqli_fetch_array($result)) {
          ?>
          <div class="col mb-2 d-flex">
            <button type="button" class="genrebtn btn mx-1 text-white fw-bold"
              data-filter="<?php echo strtolower($row["descricao"]) ?>" onclick="filterBtn(this)">
              <?php echo $row["descricao"] ?>
            </button>
          </div>
          <?php
        }
        ?>
      </div>
      <div class="container-fluid px-2">
        <div
          class="row row-cols-xs-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 row-cols-xxl-7 justify-content-start text-center">
          <?php
          $sql = "SELECT F.idfilme, F.nome, GROUP_CONCAT(DISTINCT C.descricao ORDER BY C.descricao SEPARATOR ' ') AS categorias
            FROM filmes F
            JOIN categoriasfilmes CF ON F.idfilme = CF.idfilme
            JOIN categorias C ON CF.idcategoria = C.idcategoria
            GROUP BY F.idfilme
            ORDER BY F.nome;";
          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $image = strtolower($row["nome"]);
              $image = str_replace(' ', '', $image);
              $categorias = strtolower($row["categorias"]);
              ?>
              <div class="moviecol col d-flex justify-content-center" data-filter="<?php echo $categorias; ?>">
                <a class="customcell" href="moviedetails.php?id=<?php echo $row["idfilme"]; ?>">
                  <img class="moviecover" src="assets/covers/<?php echo $image; ?>_1.jpg" alt="">
                  <p class="movietitle text-break text-white">
                    <?php echo $row["nome"]; ?>
                  </p>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>
      <?php
    } else {
      ?>
      <div class="container-fluid px-2">
        <div
          class="row row-cols-xs-1 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 row-cols-xl-6 row-cols-xxl-7 justify-content-start text-center">
          <?php
          $searchTerms = explode(' ', $search);
          $whereClauses = array_map(function ($term) {
            return "F.nome LIKE CONCAT('%', ?, '%')";
          }, $searchTerms);
          $whereClause = implode(' OR ', $whereClauses);

          $sql = "SELECT F.idfilme, F.nome, GROUP_CONCAT(DISTINCT C.descricao ORDER BY C.descricao SEPARATOR ' ') AS categorias
                  FROM filmes F
                  JOIN categoriasfilmes CF ON F.idfilme = CF.idfilme
                  JOIN categorias C ON CF.idcategoria = C.idcategoria
                  WHERE $whereClause
                  GROUP BY F.idfilme
                  ORDER BY F.nome;";
          $stmt = mysqli_stmt_init($conn);
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: dbproblems.php");
            exit();
          }
          $params = [];
          $types = str_repeat('s', count($searchTerms));
          foreach ($searchTerms as $term) {
            $params[] = $term;
          }
          array_unshift($params, $types);
          call_user_func_array(array($stmt, 'bind_param'), $params);

          mysqli_stmt_execute($stmt);
          $result = mysqli_stmt_get_result($stmt);
          $resultCheck = mysqli_num_rows($result);
          if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
              $image = strtolower($row["nome"]);
              $image = str_replace(' ', '', $image);
              $categorias = strtolower($row["categorias"]);
              ?>
              <div class="moviecol col d-flex justify-content-center" data-filter="<?php echo $categorias; ?>">
                <a class="customcell" href="moviedetails.php?id=<?php echo $row["idfilme"]; ?>">
                  <img class="moviecover" src="assets/covers/<?php echo $image; ?>_1.jpg" alt="">
                  <p class="movietitle text-break text-white">
                    <?php echo $row["nome"]; ?>
                  </p>
                </a>
              </div>
              <?php
            }
          }
          ?>
        </div>
      </div>
      <?php
    }
    ?>

    <?php include_once "footer.php" ?>
    <script>
      $(".searchbar").keydown(function (e) {
        if (e.keyCode == 13) {
          $(".search-button").click();
        }
      });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
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