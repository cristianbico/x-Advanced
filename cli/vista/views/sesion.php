<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../cli/vista/css/boostrap.min.css">
  <title>Login</title>
  <style>
    
    body {
      background-image: url("../../../cli/vista/img/fondo6.jpg");
      background-repeat: no-repeat;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .login-form {
      max-width: 300px;
      padding: 20px;
      background-color: transparent;
      border-radius: 5px;
    }
    .login-form .form-control {
      position: relative;
      padding-left: 40px;
    }
    .login-form .form-control i {
      position: absolute;
      top: 10px;
      right: 10px;
    }
    .login-form .btn {
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="login-form">
          <h2 class="text-center" style="color: yellow;">LOGIN</h2>
          <form method="POST" action="../../controlador/c_usuario.php">
            <div class="form-group">
              <label for="usuario" style="color: yellow;">Correo</label>
              <div class="input-group">
                <input type="email" class="form-control shadow-sm" name="correo" id="usuario" placeholder="Ingresa tu usuario" required>
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="contraseña" style="color: yellow;">Contraseña</label>
              <div class="input-group">
                <input type="password" class="form-control shadow-sm" name="contrasena" id="contraseña" placeholder="Ingresa tu contraseña" required">
                <div class="input-group-append">
                  <span class="input-group-text"><i class="fas fa-eye"></i></span>
                </div>
              </div>
            </div>
            <input type="hidden" name="sesion">
            <button type="submit" class="btn btn-primary btn-block">Acceder</button>
          </form>
          
        </div>
      </div>
    </div>
  </div>

  <script src="https://kit.fontawesome.com/your-fontawesome-kit.js"></script>
</body>
</html>
