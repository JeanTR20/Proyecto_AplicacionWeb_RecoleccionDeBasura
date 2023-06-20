<?php

include("../configuraciones/conexion_bd.php");


//se recibe el valor de "idHorario" 
$id = $_POST['idHorario'];

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
  $conexion->close();
}

?>

