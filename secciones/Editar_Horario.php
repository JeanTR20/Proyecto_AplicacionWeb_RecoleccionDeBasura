<?php

  include("../configuraciones/conexion_bd.php");

  if(isset($_POST['Actualizar'])){

  }else{
    
    $id=$_GET['idHorario'];

    $consulta = "SELECT * FROM tblhorario WHERE 
    IDHorario='$id'";
  
    $resultado = $conexion->query($consulta);
    $row= $resultado->fetch_assoc();
  
    $Dia=$row["Dia"];
    $Horario=$row['Horario'];
    $Ruta_Inicial=$row['RutaIncial'];
    $Ruta_Final=$row['RutaFinal'];  

  }
  

?>
<?php

include("../configuraciones/conexion_bd.php");

$id = $_GET['idHorario'];
if(isset($_POST['Actualizar'])){
  
  $Dia=$_POST['Dia'];
  $Horario=$_POST['Horario'];
  $Ruta_Inicial=$_POST['Ruta_Inicial'];
  $Ruta_Final=$_POST['Ruta_Final'];

  $Editar= "call editar_horario('$id', '$Dia', '$Horario', '$Ruta_Inicial', '$Ruta_Final')";
  
  if($conexion ->query($Editar)==true){
    header('location: vista_Horario.php');
  }else{
    echo "no se edito los datos";
  }
  $conexion->close();
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Editat_Horario</title>
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
                            <label for="Dia" class="form-label">Dia</label>
                            <input type="text" value="<?php echo $Dia ?>" name="Dia" id="Dia" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Horario" class="form-label">Horario</label>
                            <input type="text" value="<?php echo $Horario ?>" name="Horario" id="Horario" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Ruta_Inicial" class="form-label">Ruta Inicial</label>
                            <input type="text" value="<?php echo $Ruta_Inicial ?>" name="Ruta_Inicial" id="Ruta_Inicial" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Ruta_Final" class="form-label">Ruta Final</label>
                            <input type="text" value="<?php echo $Ruta_Final ?>" name="Ruta_Final" id="Ruta_Final" placeholder="">
                        </div>
                        <div class="mb-3">
                            <input type="hidden" value="<?php echo $IDHorario ?>" name="IDHorario" id="IDHorario" placeholder="">
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