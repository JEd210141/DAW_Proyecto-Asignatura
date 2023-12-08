<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Encabezado y enlaces a estilos y scripts -->
</head>
<body>
    <?php include(APPPATH . 'Views/navbars/navbar_empleado.php'); ?>

    <div class="container">
        <h2>Listado de Clientes</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Correo Electrónico</th>
                    <th>Peso de la Ropa (kg)</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Iterar sobre los clientes y mostrar sus datos -->
                <?php foreach ($clientes as $cliente): ?>
                    <tr>
                        <td><?= $cliente['nombre'] ?></td>
                        <td><?= $cliente['apellido'] ?></td>
                        <td><?= $cliente['correo'] ?></td>
                        <td><?= $cliente['peso'] ?></td>
                        <td>
                            <!-- Enlaces a las funciones de editar y borrar -->
                            <a href="<?= base_url('empleado/editar_cliente/' . $cliente['id']) ?>" class="btn btn-warning">Editar</a>
                            <a href="<?= base_url('empleado/borrar_cliente/' . $cliente['id']) ?>" class="btn btn-danger">Borrar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <!-- Scripts al final del documento -->
</body>
</html>
