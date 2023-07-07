<!DOCTYPE html>
<html lang="es-CO" class="">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ingresar</title>
  <meta name="theme-color" content="#ff2e01">

  <!--Tags SEO-->
  <meta name="author" content="un tour por Abejorral">
  <meta name="descripcion" content="Aplicativo para asesorar">
  <meta name="keyworks" content="atractivos, restaurante, hoteles, turismo, WEB APP, web app">

  <!--Favicon-->
  <link rel="icon" type="image/x-icon" href="media/logo.png">

  <!--Styles Bootstrap 5.5.1 Alfha-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/estilo.css">
  <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
    crossorigin="anonymous"></script>
</head>

<body>

  <div class="bg-dark bg-opacity-25">

    <!--Boton Registrarse-->
    <a href="registrarse.php" class="btn btn-outline-light btn-lg px-5 mt-5 ms-5 " role="button">Registrate</a>

    <!--Seccion Ingresar-->
    <section class="vh-100 gradient-custom">
      <div class="container  h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card bg-dark bg-opacity-50 text-light shadow h-25" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center ">

                <div class="mb-md-5 mt-md-4 pb-5  ">

                  <h2 class="fw-bold mb-2 text-uppercase">INGRESA</h2>
                  <p class="text-light-50 mb-4">Por favor ingrese la informacion requerida!</p>

                  <div class="form-outline form-dark mb-4">
                    <input type="email" id="typeEmailX" class="form-control form-control-lg" />
                    <label class="form-label" for="typeEmailX">Email</label>
                  </div>

                  <div class="form-outline form-light mb-4">
                    <input type="password" id="typePasswordX" class="form-control form-control-lg" />
                    <label class="form-label" for="typePasswordX">Contraseña</label>
                  </div>

                  <!--Botones de Ingresar y Atras-->
                  <button class="btn btn-outline-light btn-lg px-5 me-4" type="submit">Ingresar</button>
                  <a href="./ " class="btn btn-outline-light btn-lg px-5" role="button">Atras</a>

                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
</body>

</html>