<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1>Dashboard</h1>
    <div class="row">
      <div class="col-md-6">
        <a href="/home" class="btn btn-primary">Ir a home</a>
      </div>
      <div class="col-md-6">
        <button type="button" class="btn btn-danger" onclick="cerrarSesion()">Cerrar sesión</button>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    function cerrarSesion() {
      // Cierra la sesión y te regresa a la vista iniciar
      window.location.href = "/login";
    }
  </script>
</body>
</html>
