<?php

  //para hacer la conexion a la base de datos
  include("../../configuraciones/conexion_bd.php");

  //verifica si se obtiene el metodo post con un parametro actualizar y se ejecutara
  if(isset($_POST['Actualizar'])){

  }else{
    //se recibie el valor de "idHorario" 
    $id=$_GET['idHorario'];
    
    //se consulta con procedmiento almacenado
    $consulta=$conexion->prepare("call obtenerValores_Horario(?)");
    //se utlizo el bin_param para asignar el valor de la variable $id al parámetro de la consulta preparada.
    $consulta->bind_param("s", $id);
    $consulta->execute(); //ejecuta la consulta
    $resultado=$consulta->get_result(); //recupera los resultados de la consulta preparada y los almacena
    $row = $resultado->fetch_assoc(); //para obtener una fila del resultado y almacenarla en la variable
  
    // se asigna a los variables.
    $Dia=$row["Dia"];
    $Horario=$row['Horario'];
    $Ruta_Inicial=$row['RutaIncial'];
    $Ruta_Final=$row['RutaFinal'];  

  }
  
?>
<!doctype html>
<html lang="en">

<head>
  <title>Editar_Horario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
    <form action="../horario/Editar_Horario.php" method="post">
        <div class = "row justify-content-center">
            <div class = "col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        EDITAR HORARIO
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="Dia" class="form-label"><b>Dia</b></label>
                            <input type="text" class="form-control ms-3" value="<?php echo $Dia ?>" name="Dia" id="Dia">
                        </div>
                        <div class="mb-3">
                            <label for="Horario" class="form-label"><b>Horario</b></label>
                            <input type="text" class="form-control ms-3" value="<?php echo $Horario ?>" name="Horario" id="Horario">
                        </div>
                        <div class="mb-3">
                            <label for="Ruta_Inicial" class="form-label"><b>Ruta Inicial</b></label>
                            <input type="text" class="form-control mx-3" value="<?php echo $Ruta_Inicial ?>" name="Ruta_Inicial" id="Ruta_Inicial">
                        </div>
                        <div class="mb-3">
                            <label for="Ruta_Final" class="form-label"><b>Ruta Final</b></label>
                            <input type="text" class="form-control ms-3" value="<?php echo $Ruta_Final ?>" name="Ruta_Final" id="Ruta_Final">
                        </div>
                        <div class="mb-3"> 
                            <input type="hidden" class="form-control ms-3" value="<?php echo $_GET['idHorario']?>" name="idHorario" id="idHorario">
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