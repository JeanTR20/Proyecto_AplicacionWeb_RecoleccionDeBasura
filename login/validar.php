<?php
  include("../configuraciones/conexion_bd.php");
  session_start();
  if(isset($_SESSION['acceso'])){
    header("Location:http://localhost:8080/appweb/secciones/index.php");
  }
  
  if(!empty($_POST)){
    $Usuario = mysqli_real_escape_string($conexion, $_POST['usuario']);
    $Contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);
    //$Contrasena_encriptada = sha1($Contrasena);

    $consulta = "SELECT IDUsuario FROM tblusuario WHERE Nombre_usuario = '$Usuario' AND Contrasena = '$Contrasena' ";

    $resultado = $conexion->query($consulta);
    $rows = $resultado->num_rows;

    if($rows > 0){
        $row = $resultado->fetch_assoc();
        $_SESSION["acceso"] = $row["IDUsuario"];
        header('Location:http://localhost:8080/appweb/secciones/index.php');
    }else{
        echo "<script>
        alert('Usuario o Contraseña Incorrecto');
        window.location = 'index.php';
        </script>";
    }
}
?>