<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  include '../../admin/dao/conexion.php';
  include '../dao/d_usuario.php';

  if (isset($_POST['inscribirse'])) {

    $foto_carnet = $_FILES['foto_carnet'];
    $partida_bautismo = $_FILES['partida_bautismo'];
    $traslado_foto = $_FILES['traslado_foto'];

    if ($foto_carnet['error'] === 0) {
      $foto_carnetR = $foto_carnet['name'];
      $rutaTemporal = $foto_carnet['tmp_name'];
      $rutaDestino = '../vista/img/' . $foto_carnetR;
      move_uploaded_file($rutaTemporal, $rutaDestino);
    }
  
    
    if ($partida_bautismo['error'] === 0) {
      $partida_bautismoR = $partida_bautismo['name'];
      $rutaTemporal = $partida_bautismo['tmp_name'];
      $rutaDestino = '../vista/img/' . $partida_bautismoR;
      move_uploaded_file($rutaTemporal, $rutaDestino);
    }
  
    if ($traslado_foto['error'] === 0) {
      $traslado_fotoR = $traslado_foto['name'];
      $rutaTemporal = $traslado_foto['tmp_name'];
      $rutaDestino = '../vista/img/' . $traslado_fotoR;
      move_uploaded_file($rutaTemporal, $rutaDestino);
    }
  
      $usuarioE = [
        'nombre' => $_POST['nombre'],
        'apellidos' => $_POST['apellidos'],
        'curso' => $_POST['curso'],
        'edad' => $_POST['edad'],
        'domicilio' => $_POST['domicilio'],
        'nombre_usuario' => $_POST['nombre_usuario'],
        'contrasena' => $_POST['contrasena'],
        'correo' => $_POST['correo'],
        'foto_carnet' => $_FILES['foto_carnet']['name'],
        'partida_bautismo' => $_FILES['partida_bautismo']['name'],
        'traslado_foto' => $_FILES['traslado_foto']['name'],
        'contacto_personal' => $_POST['contacto_personal'],
        'contacto_tutor' => $_POST['contacto_tutor'],
      ];
      
      if(isset($usuarioE)){
        try {
          insertarUsuario($conexion,$usuarioE);
        } catch (Exception $e) {
          echo 'no se pudo insertar al usuario'.$e->getMessage();
        }
      }
  }

  //MANEJO DE LAS SESIONES
  if (isset($_POST['sesion'])) {
    if(isset($_POST['correo']) && $_POST['correo'] != "" && isset($_POST['contrasena']) && $_POST['contrasena'] != "")
    {
      $usE = [
        'correo' => $_POST['correo'],
        'contrasena' => $_POST['contrasena']
      ];
      $usB = iniciarSesion($conexion,$usE);
      if ($usE['correo'] == $usB['correo'] && $usE['contrasena'] == $usB['contrasena']) {
        session_start();
        $_SESSION['id'] = $usB['id'];
        $_SESSION['correo'] = $usB['correo'];
        $_SESSION['contrasena'] = $usB['contrasena'];
        $_SESSION['foto_carnet'] = $usB['foto_carnet'];
        $_SESSION['rol'] = $usB['rol'];
        if($usB['rol'] == 'admin'){header('location: ../../admin/index.php');}
        else {header('location: ../vista/views/v_sesion.php');}
      }else {
        echo'no ha funcionado';
      }
    }
  }
}