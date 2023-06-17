<?php

  include("../configuraciones/conexion_bd.php");

  if(isset($_POST['Actualizar'])){

  }else{
    
    $id=$_GET['idPuntoRecoleccion'];

    $consulta = "SELECT * FROM tblpuntorecoleccion WHERE 
    IDPuntoRecoleccion='$id'";
  
    $resultado = $conexion->query($consulta);
    $row= $resultado->fetch_assoc();
  
    $Direccion=$row["Direccion"];
    $PuntoRecoleccion=$row['PuntoRecoleccion'];

  }
  

?>
<?php

include("../configuraciones/conexion_bd.php");

$id = $_GET['idPuntoRecoleccion'];
if(isset($_POST['Actualizar'])){
  
  $Direccion=$_POST['Direccion'];
  $PuntoRecoleccion=$_POST['PuntoRecoleccion'];

  $Editar= "call editar_puntoRecoleccion('$id', '$Direccion', '$PuntoRecoleccion')";
  
  if($conexion ->query($Editar)==true){
    header('location: vista_PuntoRecoleccion.php');
  }else{
    echo "no se edito los datos";
  }
  $conexion->close();
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
    <form action="" method="post">
        <div class = "row justify-content-center">
            <div class = "col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        EDITAR HORARIO
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="Dia" class="form-label">Dirección</label>
                            <input type="text" value="<?php echo $Direccion ?>" name="Direccion" id="Direccion" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Horario" class="form-label">Punto de Recoleccion</label>
                            <input type="text" value="<?php echo $PuntoRecoleccion ?>" name="PuntoRecoleccion" id="PuntoRecoleccion" placeholder="">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" value="<?php echo $IDPuntoRecoleccion ?>" name="IDPuntoRecoleccion" id="IDPuntoRecoleccion" placeholder="">
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