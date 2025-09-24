<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emprender - Soluciones de Empleo</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* NAVBAR */
    .navbar {
      padding: 15px 0;
      font-size: 1.1rem;
    }

    .navbar-brand img {
      background-color: #000;
      border-radius: 50%;
      padding: 5px;
      width: 40px;
      height: 40px;
      margin-right: 8px;
    }

    .navbar-brand .title {
      font-size: 1.6rem;
      font-weight: bold;
      color: #000;
      line-height: 1.1;
      display: block;
    }

    .navbar-brand .subtitle {
      font-size: 0.9rem;
      color: #000;
      display: block;
    }

    .navbar-nav .nav-link {
      font-weight: bold;
      color: #000 !important;
      margin-left: 20px;
    }

    /* HERO */
    .hero {
      position: relative;
      min-height: 500px;
      overflow: hidden;
    }

    .hero .row img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .overlay-box {
      position: absolute;
      top: 35%;
      left: 50%;
      transform: translateX(-50%);
      font-size: 2.2rem;
      font-weight: bold;
      text-align: center;
      color: #fff;
      text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.7);
      border: 3px solid #fff;
      /* Marco blanco */
      padding: 10px 25px;
      background: transparent;
      /* Fondo transparente */
    }

    .overlay-buttons {
      position: absolute;
      top: 55%;
      left: 50%;
      transform: translateX(-50%);
      display: flex;
      gap: 15px;
    }

    .btn-trabajo {
      background-color: #00bcd4;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 0;
      padding: 10px 25px 10px 15px;
      position: relative;
    }

    .btn-trabajo::after {
      content: '';
      position: absolute;
      left: -10px;
      top: 0;
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
      border-right: 10px solid #00bcd4;
    }

    .btn-contratar {
      background-color: #f28c38;
      color: #fff;
      font-weight: bold;
      border: none;
      border-radius: 0;
      padding: 10px 25px 10px 15px;
      position: relative;
    }

    .btn-contratar::after {
      content: '';
      position: absolute;
      right: -10px;
      top: 0;
      border-top: 20px solid transparent;
      border-bottom: 20px solid transparent;
      border-left: 10px solid #f28c38;
    }

    /* BLOQUE INFERIOR */
    .info-box {
      background: rgba(255, 255, 255, 0.9);
      border: 1px solid #ccc;
      padding: 20px;
      margin-top: -100px;
      text-align: center;
      z-index: 10;
      position: relative;
    }
  </style>
</head>

<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="#">
        <img src="miscelanea/1f3c0f_b779c033eee84ab98788409e0494a7a1.png" alt="Logo">
        <div>
          <span class="title">Emprender</span>
          <span class="subtitle">Soluciones de Empleo</span>
        </div>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Buscando empleo</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Empleadores</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Quiénes somos</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <div class="hero">
    <div class="row g-0">
      <div class="col-6">
        <img src="miscelanea/1f3c0f_73c6b6fa7854421d8afbe2173170f83b.jpg" alt="Equipo 1">
      </div>
      <div class="col-6">
        <img src="miscelanea/1f3c0f_9505309cdabe42d9bdf9e916cff257a3.jpg" alt="Equipo 2">
      </div>
    </div>
    <div class="overlay-box">
      ¡Posicionamos a cientos de empleados cada mes!
    </div>
    <div class="overlay-buttons">
      <a href="#" class="btn btn-trabajo">¿Buscas un TRABAJO?</a>
      <a href="#" class="btn btn-contratar">¿Buscas CONTRATAR?</a>
    </div>
  </div>

  <!-- INFO -->
  <div class="container py-4">
    <div class="info-box">
      <h3 class="fw-bold">Estamos aquí para lo que sea que estés buscando.</h3>
      <p>
        Párrafo. Haz clic para editar y agregar tu propio texto. Es fácil. Haz clic en Editar Texto o doble clic aquí
        para agregar tu contenido y cambiar la fuente. Puedes arrastrar y soltar este texto donde sea que quieras en tu
        página. En este espacio puedes contar tu historia y permitir a tus...
      </p>
    </div>
  </div>

  <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>