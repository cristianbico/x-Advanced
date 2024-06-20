<?php
include "dao/d_admin.php";
include "../cli/dao/d_usuario.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../lib/bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <style>
        .eliminar-icono {
            color: red;
            cursor: pointer;
        }

        .avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: lightgray;
        }

        .table {
            background-color: #f8f9fa;
        }

        .table th {
            background-color: blue;
            color: white;
        }

        .table td {
            background-color: orange;
        }
    </style>
</head>

<body>

    <div class="container mt-3">
        <h3>Lista de alumnos</h3>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Foto carnet</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Domicilio</th>
                    <th>Edad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <?php foreach ($resultado as $fila){ ?>
            <tbody>
                <tr id="tabla">
                <td><?php echo $fila['id']; ?></td>
                <td>
                    <?php if ($fila['foto_carnet'] != '') { ?>
                        <img width=40px heigth=40px src="<?php echo $fila['foto_carnet']; ?>" alt="" class="avatar">
                    <?php } else { ?>
                        <div class="avatar"></div>
                    <?php } ?>
                </td>
                <td><?php echo $fila['nombre']; ?></td>
                <td><?php echo $fila['apellidos']; ?></td>
                <td><?php echo $fila['correo']; ?></td>
                <td><?php echo $fila['domicilio']; ?></td>
                <td><?php echo $fila['edad']; ?></td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm" onclick="mostrarInformacion(<?php echo $fila['id']; ?>)">Más</button>
                    <button class="eliminar-icono fas fa-trash-alt"><img width=30px heigth=30px src="../cli/vista/img/br.jpg" alt=""></button>
                </td>
                </tr>
            </tbody>
            <?php   }?>
        </table>
    </div>

    <div id="ventana-informacion" style="display: none;">
        <!-- Aquí se mostrará toda la información del alumno -->
    </div>

    <script src="../lib/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <script src="vista/js/admin.js"></script>
    <script>
        function mostrarInformacion(id) {
            // Aquí puedes agregar la lógica para cargar y mostrar toda la información del alumno, como el perfil de Facebook
            // Puedes utilizar AJAX para obtener los datos del alumno desde el servidor y luego mostrarlos en la ventana de información
            // Una vez que hayas obtenido los datos, puedes mostrar la ventana de información usando JavaScript o una biblioteca como Bootstrap Modal
        }

        const eliminarIconos = document.querySelectorAll('.eliminar-icono');
        eliminarIconos.forEach(icono => {
            icono.addEventListener('click', () => {
                // Aquí puedes agregar la lógica para eliminar el registro del alumno correspondiente
                // Puedes utilizar AJAX para enviar una solicitud al servidor y eliminar el registro del alumno
                // Luego, puedes actualizar la tabla de alumnos para reflejar los cambios
            });
        });
    </script>
</body>

</html>
