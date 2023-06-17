<?php

  //para hacer la conexion a la base de datos
  include("../configuraciones/conexion_bd.php");

  //verifica si se obtiene el metodo post con un parametro actualizar y se ejecutara
  if(isset($_POST['Actualizar'])){

  }else{
    //se recibie el valor de "idHorario" 
    $id=$_GET['idHorario'];
    
    //se hace la consulta
    $consulta = "SELECT * FROM tblhorario WHERE 
    IDHorario='$id'";
  
    //se ejecuta la consulta verificando con la conexion a la base de datos
    $resultado = $conexion->query($consulta);
    $row= $resultado->fetch_assoc(); //para obtener una fila del resultado y almacenarla en la variable
  
    // se asigna a los variables.
    $Dia=$row["Dia"];
    $Horario=$row['Horario'];
    $Ruta_Inicial=$row['RutaIncial'];
    $Ruta_Final=$row['RutaFinal'];  

  }
  

?>
<?php

include("../configuraciones/conexion_bd.php");


//se recibe el valor de "idHorario" 
$id = $_GET['idHorario'];

//verifica si se envio el metodo POST con un parámetro llamado "Actualizar"
if(isset($_POST['Actualizar'])){
  
  //se asigna los valores a las varibles
  $Dia=$_POST['Dia'];
  $Horario=$_POST['Horario'];
  $Ruta_Inicial=$_POST['Ruta_Inicial'];
  $Ruta_Final=$_POST['Ruta_Final'];

  //se la consulta editar con procedmiento almacenado
  $Editar=$conexion->prepare("call editar_horario(?,?,?,?,?)");
  $Editar->bind_param("sssss", $id, $Dia, $Horario, $Ruta_Inicial, $Ruta_Final);
  $resultado=$Editar->execute();

  //si verfica si fue exitoso o no la ejecucion
  if($resultado){
    header('location: vista_Horario.php');
  }else{
    echo "no se edito los datos";
  }
  $Editar->close();
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
                            <label for="Dia" class="form-label"><b>Dia</b></label>
                            <input type="text" class="form-control ms-3" value="<?php echo $Dia ?>" name="Dia" id="Dia" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Horario" class="form-label"><b>Horario</b></label>
                            <input type="text" class="form-control ms-3" value="<?php echo $Horario ?>" name="Horario" id="Horario" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Ruta_Inicial" class="form-label"><b>Ruta Inicial</b></label>
                            <input type="text" class="form-control mx-3" value="<?php echo $Ruta_Inicial ?>" name="Ruta_Inicial" id="Ruta_Inicial" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Ruta_Final" class="form-label"><b>Ruta Final</b></label>
                            <input type="text" class="form-control ms-3" value="<?php echo $Ruta_Final ?>" name="Ruta_Final" id="Ruta_Final" placeholder="">
                        </div>
                        <div class="mb-3"> 
                            <input type="hidden" class="form-control ms-3" value="<?php echo $IDHorario ?>" name="IDHorario" id="IDHorario" placeholder="">
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