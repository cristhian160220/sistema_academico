<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="Gentella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="Gentella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="Gentella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="Gentella/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="Gentella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">

          <section class="login_content">
            <form action="operaciones/registrar_usuariod.php" method="POST">
              <h1>Crear Cuenta</h1>
              <div>
                <input type="text" class="form-control" name="docente" placeholder="docente" required="" />
              </div>
              <div>
                <input type="text" class="form-control" name="usuario" placeholder="Usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="password" placeholder="Contraseña" required="" />
              </div>
              <div>
                <button type="submit">Registrar</button>
                <!--<a class="btn btn-default submit" href="index.html">Registar</a>-->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Ya tienes una cuenta?
                  <a href="login.php" class="to_register"> Iniciar Sesión </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
      </div>
    </div>
  </body>
</html>