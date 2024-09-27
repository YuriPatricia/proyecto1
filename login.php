<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ventas Caja</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
  <!-- libreria de alertas de swwetalerts2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </style>
    <style>
        body {
            background-image: url('https://img.freepik.com/fotos-premium/varios-panes-caseros-arpillera-trigo_972290-7723.jpg');
            /* Cambia la ruta a la ubicación de tu imagen */
            background-size: cover;
            /* Para que la imagen cubra toda la pantalla */
            background-position: center;
            /* Para centrar la imagen */
            background-repeat: no-repeat;
            /* Para evitar que la imagen se repita */
        }
        .login-box {
            /* Agrega un fondo semitransparente al contenedor del login */
            background-color: rgba(255, 255, 255, 0.8);
            /* Blanco con 80% de opacidad */
            border-radius: 5px;
            /* Opcional: bordes redondeados */
            padding: 5px;
            /* Espaciado interno */
        }
        #quiero{
          justify-content:center;
          background-;
         }
        
    </style>
</head>
<body class="hold-transition login-page"><br><br>
<br>
<br>
<div class="login-box 1" id="quiero">
    <center>
 <fieldset>
  <br>
  <br>
  <br>
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
     <h1><b>sistema de </b>Facturacion</h1>
    </div>
    <div class= "card-body">
      <h3><p class="login-box-msg">Ingrese sus datos</p></h3>
<!-- aqui ingresamos la rura donde se encuentra nuestros archivos -->
      <form action="autenticacion.php" method="post">
        <div class="input-group mb-3">
          
          <input type="email" name="email" id="email" class="form-control" placeholder="Email"required>
           <br>
          <br>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <!-- aca se le da nombre a la clase de datos que deseamos trasmitir -->
          <input type="password" name="password_user" id="password_user" class="form-control" placeholder="Password"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="icheck-primary">
              <br>
              <input type="checkbox" id="remember">
              <label for="remember">
                Recordar mis datos
              </label>
             
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <br>
            
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->
      <p class="mb-1">
        <a href="enlace de pagina">Cambiar contraseña</a>
      </p>
      <p class="mb-0">
        <a href="enlace de la pagina" class="text-center">¿Ovidaste tu contrasseña?</a>
      </p>
    </div>
</fieldset>
</center>
</body>
</html>
