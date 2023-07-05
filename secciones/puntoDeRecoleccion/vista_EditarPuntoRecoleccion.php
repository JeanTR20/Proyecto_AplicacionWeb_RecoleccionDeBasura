<?php

  include("../../configuraciones/conexion_bd.php");

  if(isset($_POST['Actualizar'])){

  }else{
    
    $id=$_GET['idPuntoRecoleccion'];

    $consulta=$conexion->prepare("call obtenerValores_PuntoRecoleccion(?)");
    $consulta->bind_param("s", $id);
    $consulta->execute();
    $resultado=$consulta->get_result();
    $row= $resultado->fetch_assoc();
  
    $Direccion= $row["Direccion"];
    $PuntoRecoleccion= $row['PuntoRecoleccion'];
  }
?>

<!doctype html>
<html lang="en">

<head>
  <title>Editar_PuntoRecoleccion</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="../puntoDeRecoleccion/Editar_PuntoRecoleccion.php" method="post">
        <div class = "row justify-content-center">
            <div class = "col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        EDITAR HORARIO
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="Dia" class="form-label"><b>Referencia de la calle</b></label>
                            <input type="text" class="form-control ms-3" value="<?php echo $Direccion ?>" name="Direccion" id="Direccion">
                        </div>
                        <div class="mb-3">
                            <label for="Horario" class="form-label"><b>Punto de Recoleccion</b></label>
                            <input type="text"class="form-control ms-3" value="<?php echo $PuntoRecoleccion ?>" name="PuntoRecoleccion" id="PuntoRecoleccion">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" class="form-control ms-3" value="<?php echo $_GET['idPuntoRecoleccion'] ?>" name="idPuntoRecoleccion" id="idPuntoRecoleccion">
                        </div>
                        <div class="text-center">
                        <button type="submit" value="ingresar" name="Actualizar" class="btn btn-success">Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </form>
    
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>