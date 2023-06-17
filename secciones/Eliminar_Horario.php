<?php
    include("../configuraciones/conexion_bd.php");

    if(isset($_GET['idHorario'])){
        $id=$_GET['idHorario'];

        $Eliminar = "call eliminar_horario('$id')";
        
        $resultado = $conexion->query($Eliminar);
    
        if($resultado){
            header('location: vista_Horario.php');
        }else{
            die(mysqli_error($conexion));
        }
       $conexion->close();
    }
    
?>