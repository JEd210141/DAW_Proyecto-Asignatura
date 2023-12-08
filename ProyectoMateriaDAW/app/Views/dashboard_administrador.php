<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <title>Dashboard del Administrador - Empleados</title>
</head>
<body>
    <?php include(APPPATH . 'Views/navbars/navbar_admin.php'); ?>
    <div class="container-fluid">
        <div class="jumbotron">
            <h1 class="display-4">Bienvenido, Administrador</h1>
            <p class="lead">Aquí puedes gestionar empleados, clientes y tu perfil.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Listado de Empleados</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID de Empleado</th>
                            <th>Nombre</th>
                            <th>Departamento</th>
                            <th>Correo Electrónico</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tabla con empleados -->
                    </tbody>
                </table>
            </div>
            <!-- ... el resto de tu contenido ... -->
        </div>
    </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</body>
</html>
</html>
