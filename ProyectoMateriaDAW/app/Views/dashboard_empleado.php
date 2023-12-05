<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <title>Dashboard del Empleado - Órdenes</title>
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
                        <a class="nav-link" href="#">Órdenes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('employe/cerrar_sesion') ?>">Cerrar Sesión</a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="jumbotron">
            <h1 class="display-4">Bienvenido, Empleado</h1>
            <p class="lead">Aquí puedes gestionar las órdenes y tu perfil.</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <h2>Listado de Órdenes</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID de Orden</th>
                            <th>Cliente</th>
                            <th>Fecha de Entrega</th>
                            <th>Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Aquí deberías iterar sobre las órdenes y mostrar cada una como una fila en la tabla -->
                        <tr>
                            <td>1</td>
                            <td>Cliente 1</td>
                            <td>2023-12-01</td>
                            <td>En Proceso</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cliente 2</td>
                            <td>2023-12-05</td>
                            <td>Entregado</td>
                        </tr>
                        <!-- Agrega más filas según sea necesario -->
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h2>Gráfico de Órdenes por Estado</h2>
                <canvas id="ordersChart"></canvas>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Datos de ejemplo para el gráfico
        var ordersData = {
            labels: ['En Proceso', 'Entregado', 'Pendiente'],
            datasets: [{
                data: [5, 3, 2],
                backgroundColor: ['#007bff', '#28a745', '#ffc107'],
            }]
        };

        var ctx = document.getElementById('ordersChart').getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'pie',
            data: ordersData,
        });
    </script>
</body>
</html>
