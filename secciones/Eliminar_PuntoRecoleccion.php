<?php
    include("../configuraciones/conexion_bd.php");

    if(isset($_GET['idPuntoRecoleccion'])){
        $id=$_GET['idPuntoRecoleccion'];

        $Eliminar = "call eliminar_puntoRecoleccion('$id')";
        
        $resultado = $conexion->query($Eliminar);
    
        if($resultado){
            header('location: vista_PuntoRecoleccion.php');
        }else{
            die(mysqli_error($conexion));
        }
       $conexion->close();
    }
    
?>