<!-- Archivo: editar_empleado.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <title>Editar Empleado</title>
</head>
<body>
    <?php include(APPPATH . 'Views/navbars/navbar_admin.php'); ?>

    <div class="container">
        <h2>Editar Empleado</h2>
        <!-- Formulario para editar los datos del empleado -->
        <form action="<?= base_url('admin/editar_empleado/' . $empleado['id']) ?>" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $empleado['nombre'] ?>" required>
            </div>
            <div class="form-group">
                <label for="departamento">Departamento:</label>
                <input type="text" class="form-control" id="departamento" name="departamento" value="<?= $empleado['departamento'] ?>" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" value="<?= $empleado['correo'] ?>" required>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= $empleado['username'] ?>" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" id="password" name="password" value="<?= $empleado['password'] ?>" required>
            </div>
            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" id="status" name="status" value="<?= $empleado['status'] ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
    <script>
    function submitForm() {
        if (!confirm('¿Está seguro de actualizar al empleado?')) {
            return false;
        }

        document.getElementById('editar_empleado').submit();
    }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
