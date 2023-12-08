<!-- Archivo: empleados_listas.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <title>Lista de Empleados</title>
</head>
<body>
    <?php include(APPPATH . 'Views/navbars/navbar_admin.php'); ?>

    <div class="container">
        <h2>Listado de Empleados</h2>
        <a href="<?= base_url('admin/nuevo_empleado') ?>" class="btn btn-primary">Nuevo Empleado</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Departamento</th>
                    <th>Correo Electrónico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>

                <td>
                    <a href="<?= base_url('admin/editar_empleado/') ?>" class="btn btn-warning">Editar</a>
                    <a href="<?= base_url('admin/borrar_empleado/') ?>" class="btn btn-danger">Borrar</a>
                </td>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
