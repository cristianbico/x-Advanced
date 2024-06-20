<?php

function admitirEstudiante($conexion,$id)
{
    $conexion;
    try {
        $sentencia = "UPDATE `usuario` SET `estado`='admitido' WHERE id = '$id'";
        $usuarios = $conexion->query($sentencia);
        return $usuarios->fetchAll();
    } catch (\Exception $e) {
        $conexion = 'erro al admitinr al estudiante en la bdd ' . $e->getMessage();
        return $conexion;
    }
}

function rechazarEstudiante($conexion,$id)
{
    $conexion;
    try {
        $sentencia = "UPDATE `usuario` SET `estado`='rechazado' WHERE id = '$id'";
        $usuarios = $conexion->query($sentencia);
        return $usuarios->fetchAll();
    } catch (\Exception $e) {
        $conexion = 'erro al rechazar al estudiante en la bdd' . $e->getMessage();
        return $conexion;
    }
}

function eliminarEstudiante($conexion, $id)
{
    try {
        $sentencia = "DELETE FROM usuario WHERE idU = '$id'";
        $conexion->query($sentencia);
    } catch (\Exception $e) {
        echo 'erro al eliminar al usuario ' . $e->getMessage();
    }
}


function nuevosEstudiantes($conexion)
{
    $conexion;
    try {
        $sentencia = "SELECT `id`, `nombre`, `apellidos`, `curso`, `edad`, `domicilio`, `nombre_usuario`, `contrasena`, `correo`, `foto_carnet`, `partida_bautismo`, `traslado_foto`, `contacto_personal`, `contacto_tutor`, `estado`  FROM `usuario` WHERE estado = 'espera'";
        $usuarios = $conexion->query($sentencia);
        return $usuarios->fetchAll();
    } catch (\Exception $e) {
        $conexion = 'erro al recuperar a los usuarios en espera ' . $e->getMessage();
        return $conexion;
    }
}



function estudiantesAdmitidos($conexion)
{
    $conexion;
    try {
        $sentencia = "SELECT `id`, `nombre`, `apellidos`, `curso`, `edad`, `domicilio`, `nombre_usuario`, `contrasena`, `correo`, `foto_carnet`, `partida_bautismo`, `traslado_foto`, `contacto_personal`, `contacto_tutor`, `estado`  FROM `usuario` WHERE estado = 'admitido'";
        $usuarios = $conexion->query($sentencia);
        return $usuarios->fetchAll();
    } catch (\Exception $e) {
        $conexion = 'erro al recuperar a los usuarios admitidos ' . $e->getMessage();
        return $conexion;
    }
}

function estudiantesRechazados($conexion)
{
    $conexion;
    try {
        $sentencia = "SELECT `id`, `nombre`, `apellidos`, `curso`, `edad`, `domicilio`, `nombre_usuario`, `contrasena`, `correo`, `foto_carnet`, `partida_bautismo`, `traslado_foto`, `contacto_personal`, `contacto_tutor`, `estado`  FROM `usuario` WHERE estado = 'rechazado'";
        $usuarios = $conexion->query($sentencia);
        return $usuarios->fetchAll();
    } catch (\Exception $e) {
        $conexion = 'erro al recuperar a los usuarios rechazados ' . $e->getMessage();
        return $conexion;
    }
}



