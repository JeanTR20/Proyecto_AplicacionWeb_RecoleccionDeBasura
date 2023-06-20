<!doctype html>
<html lang="en">

<head>
  <title>vista_Registro</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
<form action="../usuario/Registro_Usuario.php" method="post">
        <div class = "row justify-content-center">
            <div class = "col-md-4">
                <div class="card">
                    <div class="card-header text-center bg-dark text-light">
                        REGISTRO USUARIO
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="IDUsuario" class="form-label">Código de usuario</label>
                            <input type="text" value="" name="IDUsuario" id="IDUsuario" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Nombre_usuario" class="form-label">Nombre de usuario</label>
                            <input type="text" value="" name="Nombre_usuario" id="Nombre_usuario" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="ApPaterno" class="form-label">Apellido Paterno</label>
                            <input type="text" value="" name="ApPaterno" id="ApPaterno" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="ApMaterno" class="form-label">Apellido Materno</label>
                            <input type="text" value="" name="ApMaterno" id="ApMaterno" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Correo" class="form-label">Correo Electrónico</label>
                            <input type="text" value="" name="Correo" id="Correo" placeholder="">
                        </div>
                        <div class="mb-3">
                            <label for="Contrasena" class="form-label">Contraseña</label>
                            <input type="text" value="" name="Contrasena" id="Contrasena" placeholder="">
                        </div>
                        <div class="text-center">
                        <button type="submit" value="ingresar" name="Registrar" class="btn btn-success">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    </form>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>