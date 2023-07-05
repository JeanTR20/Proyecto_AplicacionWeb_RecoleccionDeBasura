
<?php

include("../../configuraciones/conexion_bd.php");

$id = $_POST['idPuntoRecoleccion'];
if(isset($_POST['Actualizar'])){
  
  $Direccion=$_POST['Direccion'];
  $PuntoRecoleccion=$_POST['PuntoRecoleccion'];

  $Editar= $conexion->prepare("call editar_puntoRecoleccion(?,?,?)");
  $Editar->bind_param("sss", $id, $Direccion, $PuntoRecoleccion);
  $resultado=$Editar->execute();
  
  if($resultado){
    header('location: vista_PuntoRecoleccion.php');
  }else{
    echo "no se edito los datos";
  }
  $Editar->close();
  $conexion->close();
}

?>

