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

  <h1 class="genretext text-white fw-bold display-4 px-5 pt-3">Géneros</h1>

  <div class="row mt-3 mb-4">
    <div class="col d-flex justify-content-start mx-5">
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" onclick="changeColor(this)">Tudo</button>
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" onclick="changeColor(this)">Ação</button>
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" onclick="changeColor(this)">Comédia</button>
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" onclick="changeColor(this)">Drama</button>
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" onclick="changeColor(this)">Fantasia</button>
      <button type="button" class="genrebtn btn mx-1 text-white fw-bold" onclick="changeColor(this)">Terror</button>
    </div>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="scripts/main.js"></script>
</body>

</html>