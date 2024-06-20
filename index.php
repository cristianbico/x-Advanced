<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
</head>
<body>
    <header style="box-shadow: 0 4px 2px -2px rgba(0, 0, 0, 0.2);">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#" style="font-family: 'Arial Black', Gadget, sans-serif; font-size: 24px; color: yellow;">|||X-Advanced</a>
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Contactos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#footer">Nosotros</a>
          </li>
        </ul>
      <button class="btn btn-primary" onclick="window.location.href='cli/vista/views/sesion.php'">Iniciar Sesión</button>

      </div>
    </nav>
  </header>

  <!-- Formulario de registro -->

  <div class="container mt-5">
    <form method="POST" action="cli/controlador/c_usuario.php" enctype= "multipart/form-data">
        <div class="row">
          <div class="col-md-6">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="apellidos" class="form-label">Apellidos</label>
              <input type="text" class="form-control" name="apellidos" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="curso" class="form-label">Curso</label>
              <input type="text" class="form-control" name="curso" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="edad" class="form-label">Edad</label>
              <input type="number" class="form-control" id="edad" name="edad" required>
              <div class="invalid-feedback">Este Campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="domicilio" class="form-label">Domicilio</label>
              <input type="text" class="form-control" id="domicilio" name="domicilio" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="traslado-foto" class="form-label">Traslado Foto</label>
              <input type="file" class="form-control" id="traslado-foto" name="traslado_foto" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="mb-3">
              <label for="contacto-personal" class="form-label">Contacto Personal</label>
              <input type="text" class="form-control" id="contacto-personal" name="contacto_personal">
            </div>
            <div class="mb-3">
              <label for="contacto-tutor" class="form-label">Contacto de un Familiar o Tutor</label>
              <input type="text" class="form-control" id="contacto-tutor" name="contacto_tutor" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="foto-carnet" class="form-label">Foto Carnet</label>
              <input type="file" class="form-control" id="foto-carnet" name="foto_carnet" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="partida-bautismo" class="form-label">Partida de Bautismo</label>
              <input type="file" class="form-control" id="partida-bautismo" name="partida_bautismo" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="nombre-usuario" class="form-label">Nombre de Usuario</label>
              <input type="text" class="form-control" id="nombre-usuario" name="nombre_usuario" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="contrasena" class="form-label">Contraseña</label>
              <input type="password" class="form-control" id="contrasena" name="contrasena" required>
              <div class="invalid-feedback">Este campo es obligatorio</div>
            </div>
            <div class="mb-3">
              <label for="correo" class="form-label">Correo</label>
              <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
          </div>
        </div>
        <button type="submit" class="btn btn-primary" name="inscribirse">Registrarse</button>
      </form>
      
      
  </div>

  <footer id="footer" class="mt-5 py-4" style="background-color: #FFA500;">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h4 class="text-black">Contactos</h4>
          <p class="text-black">tel: 222 284 613 <br>tel: 222 567 354</p>
        </div>
        <div class="col-md-4">
          <h4 class="text-black">Acerca de...</h4>
          <p class="text-black">X-Advanced busca facilitar la <br> gestión del tráfico de alumnos <br>en los diferentes centros de G.E</p>
        </div>
        <div class="col-md-4">
          <h4 class="text-black">Redes Sociales</h4>
          <ul class="list-inline">
            <li class="list-inline-item"><a href="#"><i class="fab fa-whatsapp text-white"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-facebook text-white"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-twitter text-white"></i></a></li>
            <li class="list-inline-item"><a href="#"><i class="fab fa-instagram text-white"></i></a></li>
          </ul>
        </div>
      </div>
    </div>

  </footer>
  
  <p style="text-align: center;">X-Advanced © Todos los Derechos Reservados 2024.</p>

 <!--  <script src="https://kit.fontawesome.com/your-font-awesome-kit.js" crossorigin="anonymous"></script> -->


</body>
</html>