<!DOCTYPE html>
<html lang="es-CO" class="">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registrarse</title>
  <meta name="theme-color" content="#ff2e01">

  <!--Tags SEO-->
  <meta name="author" content="un tour por Abejorral">
  <meta name="descripcion" content="Aplicativo para asesorar">
  <meta name="keyworks" content="atractivos, restaurante, hoteles, turismo, WEB APP, web app">

  <!--Favicon-->
  <link rel="icon" type="image/x-icon" href="../media/logo.png">

  <!--Styles Bootstrap 5.5.1 Alfha-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/css/estilo.css">
  <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
    crossorigin="anonymous"></script>
</head>

<body>
  <?php
  require_once 'conexion.php';
  $mi=null;

  //Registrar usuarios

  if (isset($_POST['guardar'])) {
    $insert = $conexion->prepare('INSERT INTO usuario (nombre,apellido,correo,clave,celular,tdocumento,documento,genero) VALUES(?,?,?,?,?,?,?,?)');

    $insert->bindParam(1, $_POST['nombre']);
    $insert->bindParam(2, $_POST['apellido']);
    $insert->bindParam(3, $_POST['correo']);
    $pass=password_hash($_POST['clave'], PASSWORD_BCRYPT);
    $insert->bindParam(4, $pass);
    $insert->bindParam(5, $_POST['celular']);
    $insert->bindParam(6, $_POST['tdocumento']);
    $insert->bindParam(7, $_POST['documento']);
    $insert->bindParam(8, $_POST['genero']);

    $mi = ($insert->execute()) ? 'Datos registrados' : 'Datos no registrados';

  }

  ?>

  <main class=" bg-dark bg-opacity-25 text-light">
    <?php
    if ($msg!='') {
      echo '<div class="alert alert-danger alert-dismissible">
      <button type="buton" class="bnt-close" data-bs-dismiss="alert"></button>
      <strong>' .$msg.'!</strong>
      </div>';
    }
    ?>

<?php
    if ($mi!='') {
      echo '<div class="alert alert-success alert-dismissible">
      <button type="button" class="bnt-close" data-bs-dismiss="alert"></button>
      <strong>' .$mi.'!</strong>
      </div>';
    }
    ?>
    <section class="vh-100 gradient-custom">
      <div class="container  h-100 ">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-8">
            <div class="card bg-dark bg-opacity-50 text-light shadow " style="border-radius: 1rem;">
              <div class="card-body p-4 text-xl-left">

                <div class="text-center">
                  <h1>¡Registrate!</h1>
                  <p>Por favor ingrese la informacion requerida.</p>
                </div>
                 <!--Formulario de registro-->
                <form action="" method="post" enctype="application/x-www-form-urlencoded" class="form-signin mt-4">
                  <div class="row">

                  <!--Datos para Registrarse-->
                    <div class="col">
                      <label for="nombre" class="form-label">Nombre</label>
                      <input type="text" class="form-control" name="nombre" placeholder="Ingrese su nombre" required>
                    </div>
                    <div class="col">
                      <label for="apellido" class="form-label">Apellido</label>
                      <input type="text" class="form-control" name="apellido" placeholder="Ingrese su apellido"
                        required>
                    </div>
                  </div>
                  <div class="mb-4 mt-5">
                    <label for="correoelectronico" class="form-label">Correo Electronico</label>
                    <input type="email" class="form-control" name="correo" placeholder="Ingrese su correo electronico"
                      required>
                  </div>

                  <div class="mb-4">
                    <label for="clave" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" name="clave" placeholder="Ingrese su contraseña"
                      required>
                  </div>

                  <div class="mb-4 ">
                    <label for="telefono" class="form-label">Celular</label>
                    <input type="text" class="form-control" placeholder="Ingrese su numero de telefono" name="celular"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57">
                  </div>

                  <select class="form-select mb-4 mt-5" aria-label="Default select example" name="tdocumento" required>
                    <option selected>Tipo de documento</option>
                    <option value="1">Tarjeta de identidad</option>
                    <option value="2">Cedula de ciudadania</option>
                    <option value="3">Cedula extranjera</option>
                    <option value="4">otra</option>
                  </select>

                  <div class=" mb-4">
                    <label for="documento" class="form-label">Documento</label>
                    <input type="text" class="form-control" name="documento"
                      placeholder="Ingrese su numero de documento"
                      onkeypress="return event.charCode >= 48 && event.charCode <= 57" required>
                  </div>

                  <select class="form-select mb-5 mt-5" aria-label="Default select example" name="genero" required>
                    <option selected>Genero</option>
                    <option value="1">Masculino</option>
                    <option value="2">Femenino</option>
                    <option value="3">otro</option>
                  </select>

                  <!--Boton de registratrse y Atras-->
                  <button type="submit" class="btn btn-outline-light btn-lg  me-5 " name="guardar">Registrarse</button>
                  <a href="ingresar.php" class="btn btn-outline-light btn-lg px-5 ms-5" role="button">Atras</a>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>



</body>

</html>