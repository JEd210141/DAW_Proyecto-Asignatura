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
    <?php include(APPPATH . 'Views/navbars/navbar_empleado.php'); ?>
    <div class="container-fluid">
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
