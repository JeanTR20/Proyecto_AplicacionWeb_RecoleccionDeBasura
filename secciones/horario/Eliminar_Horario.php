<?php
    include("../../configuraciones/conexion_bd.php");

    //verifica si se ha recibido un parámetro "idHorario"
    if(isset($_GET['idHorario'])){
        //el parametro recibido los almacenamos en la variable con el metodo get
        $id=$_GET['idHorario'];

        //consulta eliminar con procedimiento almacenado
        $Eliminar=$conexion->prepare("call eliminar_horario(?)");

        //se utlizo el bin_param para asignar el valor de la variable $id al parámetro de la consulta preparada. 
        $Eliminar->bind_param("s", $id);
        
        //se ejecuta la consutal
        $resultado = $Eliminar->execute();
    
        //se verifica si fue exitos o no
        if($resultado){
            header('location: vista_Horario.php');
        }else{
            die(mysqli_error($conexion));
        }
       $Eliminar->close();
       $conexion->close();
    }
    
?>