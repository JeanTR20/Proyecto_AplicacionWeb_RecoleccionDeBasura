<?php
include("../../configuraciones/conexion_bd.php");

  $IDHorario=$_POST['Codigo'];
  $Dia=$_POST['Dia'];
  $Horario=$_POST['Horario'];
  $Ruta_Inicial=$_POST['Ruta_Inicial'];
  $Ruta_Final=$_POST['Ruta_Final'];
  
  //preparamos la consulta editar
  $Insertar=$conexion->prepare("call insert_horario(?, ?, ?, ?, ?)");

  //asignamos los valores a los parametro de la consulta editar
  $Insertar->bind_param("sssss", $IDHorario, $Dia, $Horario, $Ruta_Inicial, $Ruta_Final);

  $resultado = $Insertar->execute(); // se ejecuta la consulta
  
  if($resultado){
    header('location: vista_Horario.php');
  }else{
    echo "no se guardo los datos";
  }
  $Insertar->close(); //cerrar la consulta preparada
?>