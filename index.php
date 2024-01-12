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

<body>
  <?php include_once "navbar_prelogin.php" ?>

  <div class="px-4 py-5 text-center">
    <img class="d-block mx-auto mb-4" src="assets/logo-no-background.png" alt="" width="250" height="60" />
    <div class="col-lg-6 mx-auto" style="max-width: 800px">
      <h1 class="display-6 fw-bold text-white">
        Os filmes mais premiados, os mais icónicos e muito mais, tudo na
        Movieflix
      </h1>
      <a href="about.php" class="aboutbtn btn btn-primary ml-auto">Informações</a>
    </div>
  </div>

  <div class="splitcontent"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/indeximage1.jpg" class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500" />
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-white lh-1 mb-3">
          Todos os essenciais
        </h1>
        <p class="lead text-white">
          Explore e desfrute de uma variedade de títulos inovadores em nosso
          catálogo, que inclui filmes aclamados pela crítica e as mais
          recentes produções originais das maiores produtoras .
        </p>
      </div>
    </div>
  </div>

  <div class="splitcontent"></div>

  <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-white lh-1 mb-3">
          Diversão ilimitada onde quer que esteja
        </h1>
        <p class="lead text-white">
          Desfrute de uma experiência cinematográfica sem fronteiras,
          acessível a qualquer momento e lugar. A nossa plataforma oferece
          entretenimento de alta qualidade, permitindo que mergulhe em
          histórias incríveis, esteja em casa ou em movimento. A diversão está
          sempre ao alcance dos seus dedos, proporcionando liberdade para
          explorar novos mundos e grandes sucessos a qualquer hora do dia.
        </p>
      </div>
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/indeximage2.jpg" class="d-block mx-lg-auto img-fluid" alt="" width="700" height="500" />
      </div>
    </div>
  </div>

  <div class="splitcontent"></div>

  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <h1 class="display-4 fw-bold text-white">Planos</h1>
  </div>
  <div class="row row-cols-1 row-cols-md-3 mb-3 mx-5 text-center">
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-bold">Básico</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">
            0€<small class="text-body-secondary fw-light">/mês</small>
          </h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Streaming em HD</li>
            <li>Áudio Padrão</li>
            <br />
            <br />
          </ul>
          <a href="register.php">
            <button type="button" class="w-100 btn btn-lg enabled">
              Selecionar
            </button>
          </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 rounded-3 shadow-sm">
        <div class="card-header py-3">
          <h4 class="my-0 fw-bold">Intermédio</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">
            7,99€<small class="text-body-secondary fw-light">/mês</small>
          </h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Streaming em Full HD</li>
            <li>Transferência de filmes</li>
            <li>Suporte Prioritário</li>
            <li>Áudio Hi-Res</li>
          </ul>
          <button type="button" class="disabledbtn w-100 btn btn-lg" disabled>
            Indisponível
          </button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card mb-4 shadow-sm">
        <div class="card-header py-3 text-white ultra">
          <h4 class="my-0 fw-bold">Ultra</h4>
        </div>
        <div class="card-body">
          <h1 class="card-title pricing-card-title">
            11,99€<small class="text-body-secondary fw-light">/mês</small>
          </h1>
          <ul class="list-unstyled mt-3 mb-4">
            <li>Streaming em Ultra HD</li>
            <li>Transferência de filmes</li>
            <li>Suporte Direto 24/7</li>
            <li>Áudio Dolby Atmos</li>
          </ul>
          <button type="button" class="disabledbtn w-100 btn btn-lg" disabled>
            Indisponível
          </button>
        </div>
      </div>
    </div>
  </div>

  <?php include_once "footer.php" ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>
