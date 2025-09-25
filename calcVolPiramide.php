<!-- integrantes 
Raziel Job Vieyra Andrade 21200992
Miguel Ángel Camargo Chavarria 21200587
Angel Eduardo Lugo Lopez 21200612
Alef David Esparza Diaz 21200591 -->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculadora de Volumen - Pirámide Hexagonal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card shadow">
          <div class="card-header bg-primary text-white">
            <h2 class="text-center mb-0">
              <i class="fas fa-cube"></i>
              Calculadora de Volumen - Pirámide Hexagonal
            </h2>
          </div>
          <div class="card-body">
            <?php
            $resultado = '';
            $error = '';

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
              try {
                // Crear cliente SOAP
                //Cambiar la ruta dependiendo donde esta ubicada
                $client = new SoapClient(null, array(
                  'location' => 'http://localhost:8080/programacionweb/1erseg/miempresa/sevicioweb/servicioweb.php',
                  'uri' => 'http://localhost/'
                ));

                $lado = $_POST['lado'];
                $altura = $_POST['altura'];

                // Llamar al método del servicio web
                $volumen = $client->calcPiramideHex($lado, $altura);

                if (is_numeric($volumen)) {
                  $resultado = $volumen;
                } else {
                  $error = $volumen;
                }
              } catch (Exception $e) {
                $error = "Error de conexión: " . $e->getMessage();
              }
            }
            ?>

            <!-- Mostrar resultado o error -->
            <?php if ($resultado !== ''): ?>
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <h5><strong>¡Resultado calculado!</strong></h5>
                <hr>
                <p class="mb-0">
                  <strong>Lado de la base:</strong> <?php echo htmlspecialchars($_POST['lado']); ?> unidades<br>
                  <strong>Altura:</strong> <?php echo htmlspecialchars($_POST['altura']); ?> unidades<br>
                  <strong>Volumen de la pirámide hexagonal:</strong>
                  <span class="fw-bold text-primary"><?php echo $resultado; ?> unidades³</span>
                </p>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
            <?php endif; ?>

            <?php if ($error !== ''): ?>
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error:</strong> <?php echo htmlspecialchars($error); ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
              </div>
            <?php endif; ?>

            <!-- Formulario -->
            <form method="POST" action="" class="needs-validation" novalidate>
              <div class="row">
                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="lado" class="form-label">
                      <i class="fas fa-ruler"></i>
                      Lado de la base hexagonal
                    </label>
                    <input type="number"
                      class="form-control"
                      id="lado"
                      name="lado"
                      step="0.01"
                      min="0.01"
                      value="<?php echo isset($_POST['lado']) ? htmlspecialchars($_POST['lado']) : ''; ?>"
                      required>
                    <div class="form-text">Ingrese el lado de la base en unidades</div>
                    <div class="invalid-feedback">
                      Por favor ingrese un valor válido para el lado.
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="mb-3">
                    <label for="altura" class="form-label">
                      <i class="fas fa-arrows-alt-v"></i>
                      Altura de la pirámide
                    </label>
                    <input type="number"
                      class="form-control"
                      id="altura"
                      name="altura"
                      step="0.01"
                      min="0.01"
                      value="<?php echo isset($_POST['altura']) ? htmlspecialchars($_POST['altura']) : ''; ?>"
                      required>
                    <div class="form-text">Ingrese la altura en unidades</div>
                    <div class="invalid-feedback">
                      Por favor ingrese un valor válido para la altura.
                    </div>
                  </div>
                </div>
              </div>

              <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                <button type="submit" class="btn btn-primary btn-lg me-md-2">
                  <i class="fas fa-calculator"></i>
                  Calcular Volumen
                </button>
                <button type="reset" class="btn btn-outline-secondary btn-lg">
                  <i class="fas fa-eraser"></i>
                  Limpiar
                </button>
              </div>
            </form>

            <hr class="my-4">

            <!-- Información adicional -->
            <div class="card bg-light">
              <div class="card-body">
                <h6 class="card-title">
                  <i class="fas fa-info-circle"></i>
                  Información sobre la pirámide hexagonal
                </h6>
                <p class="card-text small mb-0">
                  <strong>Fórmula utilizada:</strong> V = (1/3) × Área_base × Altura<br>
                  <strong>Área de base hexagonal:</strong> (3√3/2) × a²<br>
                  <strong>Donde:</strong> a = lado de la base, h = altura de la pirámide
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Validación del formulario -->
  <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>
</body>

</html>