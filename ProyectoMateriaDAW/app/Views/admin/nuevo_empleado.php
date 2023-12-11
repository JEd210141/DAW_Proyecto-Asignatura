<!-- Archivo: nuevo_empleado.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
    <title>Nuevo Empleado</title>
</head>
<body>
    <?php include(APPPATH . 'Views/navbars/navbar_admin.php'); ?>
    <?php
    $empleado = $data['empleado'];
    ?>

    <div class="container">
        <h2>Nuevo Empleado</h2>
        <!-- Formulario para ingresar los datos del nuevo empleado -->
        <form action="/empleados/guardar" method="post">
    <label for="username">Nombre de usuario</label>
    <input type="text" name="username" value="<?= $empleado->username ?>" id="username">

    <label for="password">Contraseña</label>
    <input type="password" name="password" value="" id="password">

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="<?= $empleado->nombre ?>" id="nombre">

    <label for="departamento">Departamento</label>
    <input type="text" name="departamento" value="<?= $empleado->departamento ?>" id="departamento">

    <label for="correo">Correo electrónico</label>
    <input type="email" name="correo" value="<?= $empleado->correo ?>" id="correo">

    <label for="status">Estado</label>
    <select name="status" id="status">
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
    </select>

    <input type="submit" value="Guardar">
</form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
