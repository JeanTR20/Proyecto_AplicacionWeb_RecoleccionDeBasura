<?php
include("../configuraciones/conexion_bd.php");

  $IDHorario=$_POST['Codigo'];
  $Dia=$_POST['Dia'];
  $Horario=$_POST['Horario'];
  $Ruta_Inicial=$_POST['Ruta_Inicial'];
  $Ruta_Final=$_POST['Ruta_Final'];
  
  //$Insertar=$conexion->prepare("call insert_horario('?', '?', '?', '?', '?')");
  $Insertar= "call insert_horario('$IDHorario', '$Dia', '$Horario', '$Ruta_Inicial', '$Ruta_Final')";
  //$resultado = $conexion->query($Insertar);
  //$resultado= $Insertar->execute([$IDHorario, $Dia, $Horario, $Ruta_Inicial, $Ruta_Final]);
  //$row= $resultado->fetch_assoc();

  //$Insertar2 = $row['IDHorario'], $row['IDHorario'] 

  if($conexion ->query($Insertar)==true){
    header('location: vista_Horario.php');
  }else{
    echo "no se guardo los datos";
  }
  $conexion->close();
?>