<?php
include("../configuraciones/conexion_bd.php");

$IDUsuario = $_POST['IDUsuario'];
$Nombre_usuario = $_POST['Nombre_usuario'];
$ApPaterno = $_POST['ApPaterno'];
$ApMaterno = $_POST['ApMaterno'];
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];

$Insertar = "call insert_usuario('$IDUsuario', '$Nombre_usuario', '$ApPaterno', '$ApMaterno', '$Correo', '$Contrasena')";

if($conexion->query($Insertar)==true){
    header('location: ../login/index.php');
}else{
    echo "no se guardo";
}
$conexion->close();
?>