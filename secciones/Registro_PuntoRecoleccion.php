<?php
  include("../configuraciones/conexion_bd.php");

  $IDPuntoRecoleccion=$_POST['Codigo'];
  $Direccion=$_POST['Direccion'];
  $PuntoRecoleccion=$_POST['PuntoRecoleccion'];

  
  $Insertar2=$conexion->prepare("call insert_PuntoRecoleccion(?,?,?)");
  $Insertar2->bind_param("sss", $IDPuntoRecoleccion, $Direccion, $PuntoRecoleccion);

  $resultado=$Insertar2->execute();
  
  if($resultado){
    header('location: vista_PuntoRecoleccion.php');
  }else{
    echo "no se guardo la datos";
  }
  $conexion->close();
?>