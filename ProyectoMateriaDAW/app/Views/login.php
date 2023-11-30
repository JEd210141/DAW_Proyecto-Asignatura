<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" class="fa-solid fa-user-secret fa-shake">
    <title>Inicio de Sesion</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<style>
    body {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100vw;
        height: 100vh;
    }
</style>
<form method="post" action="/login/login">
<h1 class="text-center">Inicio de Sesion</h1>
  <div class="mb-3">
  <label for="email" class="form-label">Correo Electrónico</label>
    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="nombre@ejemplo.com" required>
    <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.</div>
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Contraseña</label>
    <input type="password" class="form-control" id="InputPassword1" placeholder="••••••••" required>
    <div id="invalidPassword" class="invalid-feedback">
      La contraseña debe tener al menos 8 caracteres.
    </div>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="Check">Marcar</label>
    <div id="invalidCheck" class="invalid-feedback">
      Debe aceptar los términos y condiciones.
    </div>
  </div>
  <button type="submit" class="btn btn-primary" required>Enviar</button>
</form>
</body>
</html>