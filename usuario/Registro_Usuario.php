<?php
include("../configuraciones/conexion_bd.php");

$IDUsuario = $_POST['IDUsuario'];
$Nombre_usuario = $_POST['Nombre_usuario'];
$ApPaterno = $_POST['ApPaterno'];
$ApMaterno = $_POST['ApMaterno'];
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];

$Insertar = $conexion->prepare("call insert_usuario(?,?,?,?,?,?)");
$Insertar->bind_param("ssssss", $IDUsuario, $Nombre_usuario, $ApPaterno, $ApMaterno, $Correo, $Contrasena);

$resultado=$Insertar->execute();

if($resultado){
    header('location: ../login/index.php');
}else{
    echo "no se guardo";
}
$Insertar->close();
?>