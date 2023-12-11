<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/chart.js">
  <title>Lista de Empleados</title>
</head>
<style>
    table {
  margin: 0 auto;
  width: 100%;
}

th, td {
  text-align: center;
  padding: 10px;
}

thead th {
  background-color: #333;
  color: white;
}

tbody td {
  border-bottom: 1px solid #ddd;
}

.actions {
  text-align: center;
}

.container {
  margin: 0 0;
}

</style>
<body>
  <?php include(APPPATH . 'Views/navbars/navbar_admin.php'); ?>
  <div class="container">
    <h2>Listado de Empleados</h2>
    <a href="<?= base_url('admin/nuevo_empleado') ?>" class="btn btn-primary">Nuevo Empleado</a>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Password</th>
          <th>Nombre</th>
          <th>Departamento</th>
          <th>Correo Electrónico</th>
          <th>Fecha de Última Actualización</th>
          <th>Estado</th>
          <th colspan="3">Acciones</th>
        </tr>
      </thead>
      <tbody>

        <?php foreach ($empleados as $empleado): ?>
          <tr>
            <td><?= $empleado['id'] ?></td>
            <td><?= $empleado['username'] ?></td>
            <td>
                <?php if ($empleado['password'] != ''): ?>
                    <span class="badge bg-info">************</span>
                <?php else: ?>
                    <span class="badge bg-light">No asignado</span>
                <?php endif; ?>
            </td>
            <td><?= $empleado['nombre'] ?></td>
            <td><?= $empleado['departamento'] ?></td>
            <td><?= $empleado['correo'] ?></td>
            <td><?= $empleado['created_at'] ?></td>
            <td>
              <?php if ($empleado['status'] == 1): ?>
                <span class="badge bg-success">Activo</span>
              <?php else: ?>
                <span class="badge bg-danger">Inactivo</span>
              <?php endif; ?>
            </td>
            <td>
              <a href="<?= base_url('admin/editar_empleado/' . $empleado['id']) ?>" class="btn btn-warning">Editar</a>
            </td>
            <td>
              <a href="<?= base_url('admin/borrar_empleado/' . $empleado['id']) ?>" class="btn btn-danger">Borrar</a>
            </td>
          </tr>
        <?php endforeach; ?>
        <?php if (session()->has('mensaje')): ?>
            <div class="alert alert-success">
                <?= session()->getFlashdata('mensaje') ?>
            </div>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
