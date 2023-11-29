<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
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

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center">Registro</h1>
                <form action="/register" method="post">
                    <div class="mb-3">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Nombre" required>
                        <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="nombre@ejemplo.com" required>
                        <div id="emailHelp" class="form-text">Nunca compartiremos tu correo electrónico con nadie más.
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" placeholder="••••••••" required>
                        <div id="invalidPassword" class="invalid-feedback">
                            La contraseña debe tener al menos 8 caracteres.
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>