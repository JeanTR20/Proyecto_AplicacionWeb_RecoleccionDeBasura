
<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost:8080/appweb/css/estilos2.css">

</head>

<body>
    
    <div class="container w-75">
        <div class = "row">
            <div class = "col-md-4">
            <br>
            </div>
        </div>
        <form action="validar.php" method="post">
          <div class = "row justify-content-center">
              <div class = "col-md-4">
                  <div class="card">
                      <div class="card-header text-center bg-dark text-light">
                          INICIA SESIÓN
                      </div>
                      <div class="card-body bg-primary">
                          <div class="mb-3">
                            <label for="" class="form-label text-white">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="idUsuario" placeholder="usuario">
                          </div>
                          <div class="mb-3">
                            <label for="" class="form-label text-white">Contraseña</label>
                            <input type="password" class="form-control" name="contrasena" id="idContrasena" placeholder="contrasena">
                          </div>
                          <div class="d-grid">
                          <button type="submit" value="ingresar" class="btn btn-success">Iniciar sesión</button>
                          </div>
                      </div>
                  </div>
                </div>
            </div>    
        </form>
        
    </div>
</body>

</html>
