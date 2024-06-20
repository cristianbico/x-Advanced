<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$baseDatos = "registro_estudiantes";

$conexion = mysqli_connect($servidor, $usuario, $password, $baseDatos);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
