<!DOCTYPE html>
<html lang="es">
<head>
    <!-- Encabezado y enlaces a estilos y scripts -->
</head>
<body>
    <?php include(APPPATH . 'Views/navbars/navbar_empleado.php'); ?>

    <div class="container">
        <h2>Editar Cliente</h2>
        <!-- Formulario para editar un cliente existente -->
        <?php echo form_open('empleado/actualizarCliente/' . $cliente['id']); ?>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $cliente['nombre'] ?>" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?= $cliente['apellido'] ?>" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?= $cliente['correo'] ?>" required>
            </div>
            <div class="form-group">
                <label for="peso">Peso de la Ropa (kg):</label>
                <input type="number" step="0.01" class="form-control" id="peso" name="peso" value="<?= $cliente['peso'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        <?php echo form_close(); ?>
    </div>

    <!-- Scripts al final del documento -->
</body>
</html>
