<!doctype html>
<html lang="en">

<head>
  <title>Consultas de horario de recolección</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="http://localhost:8080/appweb/css/estilos3.css">
    
</head>

<body>
  <header>
  <nav class="navbar navbar-expand-lg navbar-light bg-success-claro fixed-top">
    <div class="container">
    
      <!--<a class="navbar-brand" href="#">Start Bootstrap</a>-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
      <img src="../../src/img/LOGO.png" class="div-img">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item active">
            <a class="nav-link text-white" href="../../consultas_personas/index.html">Inicio</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white" href="../../consultas_personas/horarios/mostrar_horario.php">Consultas de horario de recolección</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white" href="../../consultas_personas/puntos_recoleccion/mostrar_puntoRecoleccion.php">Consultas de puntos de recoleccion</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white" href="#">Quienes somos</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white" href="#">Blog</a>
          </li>
          <li class="nav-item ms-4">
            <a class="nav-link text-white" href="#">Contactamos</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <header>
    </br>
    <div class="row">
    <div id="map"></div>
    <div id="map2"></div> 
    </div> 
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBRYOwrzNo0427tK5PVcj94pXrFAzegGcI"></script>
    <script>
        function initMap() {
          // Configuración inicial del mapa
          var options = {
            center: { lat: -12.07207681852024, lng: -75.20530517149875 },
            zoom: 16
          };

          // Crea el objeto mapa y lo muestra en el contenedor 'map'
          var map = new google.maps.Map(document.getElementById('map'), options);
        }
        
        function initMap2() {
          // Configuración inicial del mapa
          var options2 = {
            center: { lat: -12.06815119985176, lng: -75.20276280810765 },
            zoom: 16
          };

          // Crea el objeto mapa y lo muestra en el contenedor 'map'
          var map2 = new google.maps.Map(document.getElementById('map2'), options2);
        }
        window.onload = function() {
            initMap();
            initMap2();
        }
      </script>
  </header>

  <!-- Page Content -->
  <section class="py-5">
    <div class="container">
      <h1 class="fw-light text-success text-center">HORARIO DE RECOLECCIÓN DE BASURA</h1>
      <section>
          <div class="text-dark">
              <table class="table table-striped">
                  <thead class="text-success">
                      <tr>
                      <th scope="col">Dia</th>
                      <th scope="col">Horarios</th>
                      <th scope="col">Ruta Inicial</th>
                      <th scope="col">Ruta Final</th>
                      </tr>
                  </thead>
                  <tbody>

                      <?php
                      include("../../configuraciones/conexion_bd.php");
                      $consulta2 = "call mostrar_Horario()";
                      $resultado2 = mysqli_query($conexion, $consulta2);

                      while($mostrar=mysqli_fetch_assoc($resultado2)){
                      ?>    

                      <tr>
                      <td><?php echo $mostrar['Dia'] ?></td>
                      <td><?php echo $mostrar['Horario'] ?></td>
                      <td><?php echo $mostrar['RutaIncial'] ?></td>
                      <td><?php echo $mostrar['RutaFinal'] ?></td>
                      <?php
                      }
                      ?>
                  </tbody>
                  </table>
              </div>
          </section>
      </header>
    <main>

    </main>
    <footer>
      <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
</body>

</html>