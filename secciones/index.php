<?php
  include("../configuraciones/conexion_bd.php");
  session_start();
  if(!isset($_SESSION['acceso'])){
    header("Location:http://localhost:8080/appweb/login/index.php");
  }

  $idUser=$_SESSION['acceso'];

  $consulta = "SELECT IDUsuario, Nombre_usuario, ApPaterno, ApMaterno FROM tblusuario WHERE 
  IDUsuario = '$idUser'";

  $resultado = $conexion->query($consulta);
  $row= $resultado->fetch_assoc();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="http://localhost:8080/appweb/css/estilos2.css">
    <title>Municipalidad de destrito de Huancayo</title>
  </head>
  <body>
    <div class= "d-flex">
      <div id= "sidebar-container" class= "bg-primary">
        <div class= "logo">
          <h4 class = "text-light font weight-bold"><img src="http://localhost:8080/appweb/src/img/LOGO.png" class="logoT"> </h4>
        </div>
        <div class= "menu">
            <a href ="../secciones/index.php" class = "d-block text-light p-3"><i class="icon ion-md-home lead"></i> Inicio</a>
            <a href ="../secciones/vista_Horario.php" class = "d-block text-light p-3"><i class="icon ion-md-calendar mr-2 lead"></i> Horarios</a>
            <a href ="../secciones/vista_PuntoRecoleccion.php" class = "d-block text-light p-3"><i class="icon ion-md-pint mr-2 lead"></i>Punto Recoleccion</a>
        </div>
    </div>
    <div class= "w-100">
      <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
        <div class="container">

       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="http://localhost:8080/appweb/src/img/User.png" class="img-fluid rounded-circle avatar mr-2">
                <?php echo utf8_decode($row['Nombre_usuario']) ." ". utf8_decode($row['ApPaterno'])." ".utf8_decode($row['ApMaterno']) ?>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../secciones/Perfil_Usuario.php"><i class="icon ion-md-person mr-2"></i> Mi perfil</a>
                <a class="dropdown-item" href="../secciones/salir.php"><i class="icon ion-md-log-out"></i> Cerrar sesion</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
      </nav>
      <div id="content">
        <section>
          <div class="container">
            <div class="row">
              <div class="col-lg-9">
                <h1 class="font-weight-bold mb-0 ">Bienvenido <?php echo " ". utf8_decode($row['Nombre_usuario']) ?></h1>
                <p class="lead text-muted">INFORMACIONES</p>
              </div>

            </div>
          </div>
        </section>
        
      </div>
    </div>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>