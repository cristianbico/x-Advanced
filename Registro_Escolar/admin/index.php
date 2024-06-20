<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../lib/bootstrap-5.3.2-dist/css/bootstrap.min.css">
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
            <tbody>
                <tr id="tabla">
                    <td>1</td>
                    <td><img src="..." alt="Foto de usuario" class="img-thumbnail" width="50" height="50"></td>
                    <td>Enrique</td>
                    <td>Maligui</td>
                    <td>enrimaligui07@correo.com</td>
                    <td>Oyala</td>
                    <td>23</td>
                    <td>
                        <button type="button" class="btn btn-primary btn-sm">Más</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="../lib/bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <script src="vista/js/admin.js"></script>
</body>
</html>