<?php
include("../configuraciones/conexion_bd.php");

  $IDHorario=$_POST['Codigo'];
  $Dia=$_POST['Dia'];
  $Horario=$_POST['Horario'];
  $Ruta_Inicial=$_POST['Ruta_Inicial'];
  $Ruta_Final=$_POST['Ruta_Final'];
  
  $Insertar= "INSERT INTO tblhorario (IDHorario, Dia, Horario, RutaIncial, RutaFinal) 
  VALUE('$IDHorario', '$Dia', '$Horario', '$Ruta_Inicial', '$Ruta_Final')";

  if($conexion ->query($Insertar)==true){
  }else{
    echo "no se guardo la datos";
  }
  $conexion->close();
?>