<?php
  include("../configuraciones/conexion_bd.php");

  $IDPuntoRecoleccion=$_POST['Codigo'];
  $Direccion=$_POST['Direccion'];
  $PuntoRecoleccion=$_POST['PuntoRecoleccion'];

  
  $Insertar2= "INSERT INTO tblpuntorecoleccion (IDPuntoRecoleccion, Direccion, PuntoRecoleccion) 
  VALUE('$IDPuntoRecoleccion', '$Direccion', '$PuntoRecoleccion')";

  if($conexion ->query($Insertar2)==true){
  }else{
    echo "no se guardo la datos";
  }
  $conexion->close();
?>