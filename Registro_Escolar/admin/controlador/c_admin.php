<?php

//POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include '../dao/conexion.php';
    include '../dao/d_admin.php';

    if (isset($_POST['borrarEstudiante'])) {
        borrarEstudiante($conexion,$_POST['id']);
    }
    if (isset($_POST['aceptarEstudiante'])) {
        admitirAlEstudiante($conexion,$_POST['id']);
    }
    if (isset($_POST['rechazarEstudiante'])) {
        rechazarAlEstudiante($conexion,$_POST['id']);
    }
}

// //GET
// if ($_SERVER["REQUEST_METHOD"] == "GET") {
//     if (isset($_GET['mostrarEstudiantes'])) {
//         echo json_encode( mostrarEstudiantes($conexion));
//         mostrarEstudiantes($conexion);
//     }
// }



//MÉTODOS

//FUNCIÓN QUE ELIMINA A LOS ESTUDIANTES
function borrarEstudiante($bdd,$id)
{
    try {
        return eliminarEstudiante($bdd,$id);
    } catch (Exception $e) {
        echo 'no se pudo eliminar al estudiantes'.$e->getMessage();
    }
}
//FUNCIÓN QUE ADMITE A LOS ESTUDIANTES
function admitirAlEstudiante($bdd,$id)
{
    try {
        admitirEstudiante($bdd,$id);
    } catch (Exception $e) {
        echo 'no se pudo admitir al estudiantes'.$e->getMessage();
    }
}
//FUNCIÓN QUE RECHAZA A LOS ESTUDIANTES
function rechazarAlEstudiante($bdd,$id)
{
    try {
        rechazarEstudiante($bdd,$id);
    } catch (Exception $e) {
        echo 'no se pudo admitir al estudiantes'.$e->getMessage();
    }
}

// LAS FUNCIONES QUE RECUPERAS EN LAS VISTAS PARA RELLENAR
// DINÁMICAMENTE LA INFO DE LOS ESTUDIANTE: DEVUELVEN ARRAYS

//Devuelve la lista de los estudiantes que han enviado la solicitud (los nuevos)
//los que están en el index del admin
function mostrarEstudiantes($bdd)
{
    try {
        return nuevosEstudiantes($bdd);
    } catch (Exception $e) {
        echo 'error al mostrar al estudiante'.$e->getMessage();
        return false;
    }
}

//Devuelve la lista de los estudiantes que han enviado la solicitud y han sido rechazados
//los que están en el la vista de estudiantes rechazados
function mostrarEstudiantesRechazados($bdd)
{
    try {
        return estudiantesRechazados($bdd);
    } catch (Exception $e) {
        echo 'error al mostrar a los estudiantes rechazados'.$e->getMessage();
        return false;
    }
}

//Devuelve la lista de los estudiantes que han enviado la solicitud y han sido admitidos
//los que están en la vista de estudiantes admitidos
function mostrarEstudiantesAdmitidos($bdd)
{
    try {
        return estudiantesAdmitidos($bdd);
    } catch (Exception $e) {
        echo 'error al mostrar a los estudiantes admitidos'.$e->getMessage();
        return false;
    }
}





