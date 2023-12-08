<!-- Archivo: borrar_empleado.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <title>Borrar Empleado</title>
</head>
<body>
    <?php include(APPPATH . 'Views/navbars/navbar_admin.php'); ?>

    <div class="container">
        <h2>Borrar Empleado</h2>
        <p>¿Estás seguro de que deseas borrar al empleado <?= $empleado['nombre'] ?>?</p>

        <!-- Botón para mostrar el modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmModal">
            Sí, Borrar
        </button>
        <a href="<?= base_url('admin/empleados_listas') ?>" class="btn btn-secondary">Cancelar</a>

        <!-- Modal de confirmación -->
        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmModalLabel">Confirmar Borrado de Empleado</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>¿Estás seguro de que deseas borrar al empleado <?= $empleado['nombre'] ?>?</p>
                    </div>
                    <div class="modal-footer">
                        <!-- Botón para realizar el borrado -->
                        <a href="<?= base_url('admin/confirmar_borrar_empleado/' . $empleado['id']) ?>" class="btn btn-danger">Sí, Borrar</a>
                        <!-- Botón para cerrar el modal -->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
