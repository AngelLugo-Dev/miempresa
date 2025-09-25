<!-- integrantes 
Raziel Job Vieyra Andrade 21200992
Miguel Ángel Camargo Chavarria 21200587
Angel Eduardo Lugo Lopez 21200612
Alef David Esparza Diaz 21200591 -->
<?php

// NOMBRE DE LA CLASE 
class clsServicios
{

  // PROGRAMACIÓN DE MÉTODOS
  public function sp_Acceso($usu, $pwd)
  {

    // Se estructura el comando SQL para ejecutar 
    $cmdSql = "call sp_Acceso('$usu','$pwd');";

    // -------------------------------------------------
    // Variable para recepción de estatus+datos
    $datos = array();

    if ($conn = mysqli_connect("localhost", "root", "Maple0017", "prosoft")) {
      // Ejecución del comando SQL y recibir resultados (recordset)
      $renglon = mysqli_query($conn, $cmdSql);

      if ($renglon) {
        // Ciclo para lectura de registros
        $resultado = mysqli_fetch_assoc($renglon);
        if ($resultado) {
          $datos[0]["BAN"] = $resultado["usu_ban"];
          if ($datos[0]["BAN"] == "1") {
            // El usuario existe en BD, extraer los demás datos
            $datos[1]["CVE"] = $resultado["usu_cve_usuario"];
            $datos[2]["NOM"] = $resultado["usu_nombre"];
            $datos[3]["USU"] = $resultado["usu_usuario"];
            $datos[4]["ROL"] = $resultado["rol_nombre"];
          }
        } else {
          $datos[0]["BAN"] = "0";
        }
      } else {
        $datos[0]["BAN"] = "0";
      }

      // Cerrar conexión
      mysqli_close($conn);
    }
    // Retornar el arreglo formateado y con los datos de resultado
    return $datos;
  }
  // -------------------------

  /**
   * Método para calcular el volumen de una pirámide hexagonal
   * Fórmula: V = (1/3) * área_base * altura
   * Área base hexagonal: (3√3/2) * a²
   * 
   * @param float $lado - Lado de la base hexagonal
   * @param float $altura - Altura de la pirámide
   * @return mixed - Resultado del cálculo o mensaje de error
   */
  public function calcPiramideHex($lado, $altura)
  {
    // Validar que los parámetros sean números positivos
    if (!is_numeric($lado) || !is_numeric($altura) || $lado <= 0 || $altura <= 0) {
      return "Error: Los parámetros deben ser números positivos";
    }

    // Calcular el área de la base hexagonal: (3√3/2) * a²
    $areaBase = (3 * sqrt(3) / 2) * pow($lado, 2);

    // Calcular el volumen: V = (1/3) * área_base * altura
    $volumen = (1 / 3) * $areaBase * $altura;

    return round($volumen, 4);
  }
}
