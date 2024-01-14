<nav class="navbar navbar-expand-md">
  <div class="container-fluid">
    <a class="navbar-brand" href="mainpage.php">
      <img src="assets/brand-no-background.png" alt="Movieflix" width="210" height="60" />
    </a>
    <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11">
      <i class="fa-solid fa-bars custom-toggler"></i>
    </button>

    <div class="navbar-collapse d-md-flex collapse" id="navbarsExample11">
      <ul class="navbar-nav col-md-10 justify-content-md-center">
        <li class="nav-item">
          <a class="nav-link text-white" href="mainpage.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="movies.php">Filmes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="series.php">Séries</a>
        </li>
      </ul>
    




      <div class="d-md-flex col-md-2 justify-content-md-end">
    <form method="post" action="functions.php">
        <a class="nav-link dropdown-toggle show text-white" data-bs-toggle="dropdown" style="cursor: pointer;">Username</a>
        <ul class="dropdown-menu dropdown-menu-end usermenu">
            <li><a class="dropdown-item" href="profile.php" type="button">Perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
                <button class="dropdown-item" type="submit" name="logout">Sair</button>
            </li>
        </ul>
    </form>
</div>



    </div>
  </div>
</nav>