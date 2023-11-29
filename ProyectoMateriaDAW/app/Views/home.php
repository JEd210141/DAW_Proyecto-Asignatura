<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
    }
    .actions {
  		display: flex;
  		flex-direction: column;
	}
    
    .actions a:last-child {
    margin-top: 20px;
  }
</style>
<body>
  <div class="actions">
  <div class="text">
    <h1>Bienvenido al sistema</h1>
  </div>
    <a href="<?= base_url('login') ?>" class="btn btn-primary">Iniciar sesión</a>
    <a href="<?= base_url('register') ?>" class="btn btn-primary">Registrarse</a>
    <a href="<?= base_url('welcome') ?>" class="btn btn-primary">Cancelar</a>
  </div>
</body>
</html>
