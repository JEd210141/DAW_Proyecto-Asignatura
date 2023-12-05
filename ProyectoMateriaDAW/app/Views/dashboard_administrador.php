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
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Lavandería</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Empleados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('admin/cerrar_sesion') ?>">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>

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
                        <!-- Aquí deberías iterar sobre los empleados y mostrar cada uno como una fila en la tabla -->
                        <tr>
                            <td>1</td>
                            <td>Empleado 1</td>
                            <td>Lavado</td>
                            <td>empleado1@example.com</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Empleado 2</td>
                            <td>Planchado</td>
                            <td>empleado2@example.com</td>
                        </tr>
                        <!-- Agrega más filas según sea necesario -->
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h2>Gráfico de Empleados por Departamento</h2>
                <canvas id="employeesChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Datos de ejemplo para el gráfico
        var employeesData = {
            labels: ['Lavado', 'Planchado', 'Doblado'],
            datasets: [{
                data: [5, 3, 2],
                backgroundColor: ['#007bff', '#28a745', '#ffc107'],
            }]
        };

        var ctx = document.getElementById('employeesChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: employeesData,
        });
    </script>
</body>
</html>
