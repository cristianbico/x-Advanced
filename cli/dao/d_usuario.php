<?php
//recuperar.php en dao
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'registro_estudiantes';

$con = mysqli_connect($hostname, $username, $password, $database);

if (!$con) {
    die('Error al conectar con la base de datos: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM usuario";
$resultado = mysqli_query($con, $sql);

$datos = array();
while ($fila = mysqli_fetch_assoc($resultado)) {
    $datos[] = $fila;
}
mysqli_close($con);
function insertarUsuario($conexion, $usuario)
{


    try {
        $nombre = $usuario['nombre'];
        $apellidos = $usuario['apellidos'];
        $curso = $usuario['curso'];
        $edad = $usuario['edad'];
        $domicilio = $usuario['domicilio'];
        $nombreUsuario = $usuario['nombre_usuario'];
        $contrasena = $usuario['contrasena'];
        $correo = $usuario['correo'];
        $foto_carnet = $usuario['foto_carnet'];
        $partida_bautismo = $usuario['partida_bautismo'];
        $traslado_foto = $usuario['traslado_foto'];
        $contacto_personal = $usuario['contacto_personal'];
        $contacto_tutor = $usuario['contacto_tutor'];

        $sql = "INSERT INTO `usuario`(`nombre`, `apellidos`, `curso`, `edad`, `domicilio`,
            `nombre_usuario`, `contrasena`, `correo`, `foto_carnet`, `partida_bautismo`, `traslado_foto`,
            `contacto_personal`, `contacto_tutor`, `estado`) VALUES ('$nombre', '$apellidos', '$curso', '$edad',
           '$domicilio', '$nombreUsuario', '$contrasena', '$correo', '$foto_carnet', '$partida_bautismo',
           '$traslado_foto','$contacto_personal','$contacto_tutor','espera')";

        mysqli_query($conexion, $sql);

    } catch (Exception $e) {
        echo'error al insertar al usuario' . $e->getMessage();
    }
}

function iniciarSesion($con, $us)
{
    $correo = $us['correo'];
    $contrasena = $us['contrasena'];
    try {
        $sentencia = "SELECT * FROM `usuario` WHERE correo = '$correo' AND contrasena = '$contrasena'";
        $resultado = $con->query($sentencia);
        return $resultado->fetch_assoc();
    } catch (Exception $e) {
        echo ('el error está en verificar de dao: ' . $e->getMessage());
    }
}






// <form id="formulario">
//   <input type="file" id="imagen" name="imagen">
//   <button type="submit">Enviar</button>
// </form>

// const formulario = document.getElementById('formulario');
// const imagenInput = document.getElementById('imagen');

// formulario.addEventListener('submit', async (event) => {
//     event.preventDefault();
  
//     const formData = new FormData();
//     formData.append('imagen', imagenInput.files[0]);
  
//     const response = await fetch('subirImagen.php', {
//       method: 'POST',
//       body: formData
//     });
  
//     const data = await response.json();
//     console.log(data);
//   });

//   <?php

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   if (isset($_FILES['imagen'])) {
//     $imagen = $_FILES['imagen'];

//     if ($imagen['error'] === 0) {
//       $nombreArchivo = $imagen['name'];
//       $rutaTemporal = $imagen['tmp_name'];
//       $rutaDestino = 'imagenes/' . $nombreArchivo;

//       if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
//         echo json_encode(['mensaje' => 'Imagen subida correctamente']);
//       } else {
//         echo json_encode(['error' => 'Error al subir la imagen']);
//       }
//     } else {
//       echo json_encode(['error' => 'Error en la imagen']);
//     }
//   } else {
//     echo json_encode(['error' => 'No se ha enviado la imagen']);
//   }
// }







// <?php

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   // Recoger los datos del formulario
//   $nombre = $_POST['nombre'];
//   $apellidos = $_POST['apellidos'];
//   $curso = $_POST['curso'];
//   $fotoCarnet = $_FILES['fotoCarnet'];
//   $edad = $_POST['edad'];
//   $partidaNacimiento = $_FILES['partidaNacimiento'];
//   $domicilio = $_POST['domicilio'];
//   $usuario = $_POST['usuario'];
//   $contrasena = $_POST['contrasena'];
//   $correo = $_POST['correo'];

//   // Validar los datos del formulario

//   // Subir los archivos fotoCarnet y partidaNacimiento
//   if ($fotoCarnet['error'] === 0) {
//     $nombreArchivo = $fotoCarnet['name'];
//     $rutaTemporal = $fotoCarnet['tmp_name'];
//     $rutaDestino = 'imagenes/' . $nombreArchivo;

//     if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
//       // Archivo subido correctamente
//     } else {
//       // Error al subir el archivo
//     }
//   } else {
//     // Error en el archivo fotoCarnet
//   }

//   if ($partidaNacimiento['error'] === 0) {
//     $nombreArchivo = $partidaNacimiento['name'];
//     $rutaTemporal = $partidaNacimiento['tmp_name'];
//     $rutaDestino = 'documentos/' . $nombreArchivo;

//     if (move_uploaded_file($rutaTemporal, $rutaDestino)) {
//       // Archivo subido correctamente
//     } else {
//       // Error al subir el archivo
//     }
//   } else {
//     // Error en el archivo partidaNacimiento
//   }

//   // Crear la variable "usuario" de tipo lista
//   $usuario = [
//     'nombre' => $nombre,
//     'apellidos' => $apellidos,
//     'curso
// CREATE TABLE usuario (
//     id INT PRIMARY KEY AUTO_INCREMENT,
//     nombre VARCHAR(255) NOT NULL,
//     apellidos VARCHAR(255) NOT NULL,
//     curso VARCHAR(255) NOT NULL,
//     edad INT NOT NULL,
//     domicilio VARCHAR(255) NOT NULL,
//     nombre_usuario VARCHAR(255) UNIQUE NOT NULL,
//     contrasena VARCHAR(255) NOT NULL,
//     correo VARCHAR(255) NOT NULL,
//     foto_carnet VARCHAR(255),
//     partida_bautismo VARCHAR(255),
//     traslado_foto VARCHAR(255),
//     estado TINYINT(1) NOT NULL DEFAULT 1
//   );
  