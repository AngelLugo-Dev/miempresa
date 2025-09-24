<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emprender - Soluciones de Empleo</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* HERO */
    .hero {
      position: relative;
    }

    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .overlay-box {
      position: absolute;
      top: 35%;
      left: 50%;
      transform: translate(-50%, -50%);
      background: rgba(255, 255, 255, 0.85);
      padding: 15px 25px;
      border: 2px solid white;
      font-size: 1.4rem;
      font-weight: bold;
      text-align: center;
    }

    .overlay-buttons {
      position: absolute;
      top: 60%;
      left: 50%;
      transform: translateX(-50%);
    }

    .btn-trabajo {
      background-color: #00bcd4;
      color: #fff;
      font-weight: bold;
    }

    .btn-contratar {
      background-color: #e64a19;
      color: #fff;
      font-weight: bold;
    }

    /* NAVBAR */
    .navbar-nav .nav-link {
      font-weight: bold;
      font-size: 1.1rem;
      color: black !important;
    }

    /* BLOQUE INFERIOR */
    .info-box {
      background: #fff;
      border: 1px solid #ddd;
      padding: 30px;
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">
        <img src="miscelanea/1f3c0f_b779c033eee84ab98788409e0494a7a1.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">
        Emprender <span class="fw-normal">Soluciones de Empleo</span>
      </a>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Buscando empleo</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Empleadores</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Quiénes somos</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO SECTION CON DOS IMÁGENES -->
  <div class="hero position-relative">
    <div class="row g-0">
      <div class="col-6">
        <img src="miscelanea/1f3c0f_73c6b6fa7854421d8afbe2173170f83b.jpg" alt="Equipo de trabajo 1">
      </div>
      <div class="col-6">
        <img src="miscelanea/1f3c0f_9505309cdabe42d9bdf9e916cff257a3.jpg" alt="Equipo de trabajo 2">
      </div>
    </div>
    <div class="overlay-box">
      ¡Posicionamos a cientos de empleados cada mes!
    </div>
    <div class="overlay-buttons d-flex gap-3">
      <a href="#" class="btn btn-trabajo">¿Buscas un TRABAJO?</a>
      <a href="#" class="btn btn-contratar">¿Buscas CONTRATAR?</a>
    </div>
  </div>

  <!-- TEXTO PRINCIPAL -->
  <div class="container py-5">
    <div class="info-box">
      <h3 class="fw-bold">Estamos aquí para lo que sea que estés buscando.</h3>
      <p>
        Párrafo. Haz clic para editar y agregar tu propio texto. Es fácil. Haz clic en Editar Texto o doble clic aquí para agregar tu contenido y cambiar la fuente.
        Puedes arrastrar y soltar este texto donde sea que quieras en tu página. En este espacio puedes contar tu historia y permitir a tus...
      </p>
    </div>
  </div>

  <script src="bootstrap.bundle.min.js"></script>
</body>

</html>