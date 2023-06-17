<?php
    include("../configuraciones/conexion_bd.php");

    if(isset($_GET['idPuntoRecoleccion'])){
        $id=$_GET['idPuntoRecoleccion'];

        $Eliminar = $conexion->prepare("call eliminar_puntoRecoleccion(?)");
        $Eliminar->bind_param("s", $id);        

        $resultado = $Eliminar->execute();
    
        if($resultado){
            header('location: vista_PuntoRecoleccion.php');
        }else{
            die(mysqli_error($conexion));
        }
       $Eliminar->close();
    }
    
?>