<!DOCTYPE html>
<html lang="es-CO">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
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

  if (isset($_POST['validar'])) {
    $result = $conexion->prepare('SELECT * FROM  administrador WHERE usuario=?');
    $result->bindParam(1, $_POST['usuario']);
    $result->execute();

    $data = $result->fetch(PDO::FETCH_ASSOC);
    if (is_array($data)) {
      if (password_verify($_POST['pass'], $data['pass'])) {
        $_SESSION['admi'] = $data['idadministrador'];
        header('location: home.php');
      } else {
        echo "Contraseña incorrecta";
      }
    } else {
      echo "Datos incorrecto";
    }
  }

  ?>

  <section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card bg-dark text-white" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
              <form action="" method="post" enctype="application/x-www-form-urlencoded" class="form-signin">

                <div class="mb-md-5 mt-md-4 pb-5">

                  <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                  <p class="text-white-50 mb-5">Please enter your login and password!</p>

                  <div class="form-outline form-white mb-4">
                    <input type="text" name="usuario" class="form-control form-control-lg" required />
                    <label class="form-label" for="User">User</label>
                  </div>

                  <div class="form-outline form-white mb-4">
                    <input type="password" name="pass" class="form-control form-control-lg" required />
                    <label class="form-label" for="typePasswordX">Password</label>
                  </div>

                  <p class="small mb-5 pb-lg-2"><a class="text-white-50" href="#!">Forgot password?</a></p>

                  <button type="submit" class="btn btn-success" name="validar">Ingresar</button>

                  <div class="d-flex justify-content-center text-center mt-4 pt-1">
                    <a href="#!" class="text-white"><i class="fab fa-facebook-f fa-lg"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-twitter fa-lg mx-4 px-2"></i></a>
                    <a href="#!" class="text-white"><i class="fab fa-google fa-lg"></i></a>
                  </div>

                </div>

                <div>
                  <p class="mb-0">Don't have an account? <a href="#!" class="text-white-50 fw-bold">Sign Up</a>
                  </p>
                </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <iframe src="https://es.wikiloc.com/rutas-mountain-bike/trocha-el-cairo-la-loma-paical-el-cairo-23682013#lb-embed" frameborder="0"></iframe>
    <iframe frameborder="0" src="https://es.wikiloc.com/wikiloc/spatialArtifacts.do?event=view&amp;id=4682097&amp;measures=on&amp;title=off&amp;near=off&amp;images=on&amp;maptype=S" width="650px" height="600px"></iframe>
</body>

</html>