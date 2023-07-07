<!DOCTYPE html>
<html lang="es-CO">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <meta name="theme-color" content="#ff2e01">

  <!--Tags SEO-->
  <meta name="author" content="un tour por Abejorral">
  <meta name="descripcion" content="Aplicativo para asesorar">
  <meta name="keyworks" content="atractivos, restaurante, hoteles, turismo, WEB APP, web app">

  <!--Favicon-->
  <link rel="icon" type="image/x-icon" href="../media/Logo.png">

  <!--Styles Bootstrap 5.5.1 Alfha-->
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css">
  <link rel="stylesheet" href="../assets/css/style.css">
  <script type="text/javascript" src="../assets/js/bootstrap.bundle.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
    integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
    crossorigin="anonymous"></script>

  <!--Google Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@700&family=Rubik+Dirt&display=swap"
    rel="stylesheet">
</head>

<body>
<?php
  require_once 'conexion.php';
  session_start();

  if (isset($_SESSION['admi'])) {
    $search = $conexion->prepare('SELECT * FROM administrador WHERE idadministrador=?');
    $search->bindParam(1, $_SESSION['admi']);
    $search->execute();

    $data = $search->fetch(PDO::FETCH_ASSOC);


    if (is_array($data)) { 
      $usuario = $data;
    }
  }

    if (!empty($usuario)) {
    ?>

      <header>
        <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-toggler"
              aria-controls="navbar-toggler" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-toggler">
              <a class="navbar-brand" href="#">
                <img src="../media/Logo.png" width="50" alt="Logo WebApp">
              </a>
              <ul class="navbar-nav d-flex">
                <li class="nav-item">
                  <a class="nav-link" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#nosotros">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#eventos">Eventos</a>
                </li>
              </ul>
            </div>
          </div>
          </div>
          <div class="d-flex justify-content-end  text-dark pe-5 ">
            <a class="nav-link" href="información.html" role="button">Informate</a>
        </nav>
      </header>
      <main class="m-5">

        <h1>Bienvenido</h1>

      </main>

      <?php
    } else {
      header('location: ./');
    }

  ?>

</body>

</html>