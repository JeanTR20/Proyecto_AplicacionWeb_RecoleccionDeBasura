<?php
  include("../configuraciones/conexion_bd.php");

  $IDPuntoRecoleccion=$_POST['Codigo'];
  $Direccion=$_POST['Direccion'];
  $PuntoRecoleccion=$_POST['PuntoRecoleccion'];

  
  $Insertar2= "call insert_PuntoRecoleccion('$IDPuntoRecoleccion', '$Direccion', '$PuntoRecoleccion')";

  if($conexion ->query($Insertar2)==true){
    header('location: vista_PuntoRecoleccion.php');
  }else{
    echo "no se guardo la datos";
  }
  $conexion->close();
?>