<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Iniciar Sesión - Empleado</title>
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
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <form action="/employee/login" method="post">
                    <h2 class="text-center mb-4">Iniciar Sesión - Empleado</h2>
                    
                    <div class="form-group">
                        <label for="employeeUsername">Nombre de Usuario:</label>
                        <input type="text" class="form-control" id="employeeUsername" name="employeeUsername" placeholder="Usuario" required>
                        <div id="UsernameHelp" class="form-text">Nunca compartiremos tu Username con nadie más.</div>
                    </div>
                    
                    <div class="form-group">
                        <label for="employeePassword">Contraseña:</label>
                        <input type="password" class="form-control" id="employeePassword" name="employeePassword" placeholder="••••••••" required>
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
                    
                    <button type="submit" class="btn btn-primary btn-block">Iniciar Sesión</button>
                    <!-- Agregar el botón de regreso -->
                    <?php echo anchor('home', 'Regresar a Inicio', ['class' => 'btn btn-secondary btn-block mt-3']); ?>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
