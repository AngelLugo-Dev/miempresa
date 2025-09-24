<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emprender - Soluciones de Empleo</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .hero {
      position: relative;
    }

    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .overlay-text {
      position: absolute;
      top: 35%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 1.5rem;
      font-weight: bold;
      text-align: center;
    }

    .overlay-buttons {
      position: absolute;
      top: 55%;
      left: 50%;
      transform: translateX(-50%);
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
    <div class="overlay-text">
      ¡Posicionamos a cientos de empleados cada mes!
    </div>
    <div class="overlay-buttons d-flex gap-3">
      <a href="#" class="btn btn-info text-white">¿Buscas un TRABAJO?</a>
      <a href="#" class="btn btn-danger">¿Buscas CONTRATAR?</a>
    </div>
  </div>

  <!-- TEXTO PRINCIPAL -->
  <div class="container py-5">
    <h3 class="fw-bold">Estamos aquí para lo que sea que estés buscando.</h3>
    <p>
      Párrafo. Haz clic para editar y agregar tu propio texto. Es fácil. Haz clic en Editar Texto o doble clic aquí para agregar tu contenido y cambiar la fuente.
      Puedes arrastrar y soltar este texto donde sea que quieras en tu página. En este espacio puedes contar tu historia y permitir a tus...
    </p>
  </div>

  <script src="bootstrap.bundle.min.js"></script>
</body>

</html>