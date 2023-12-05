<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Tipo de Usuario</title>
</head>
<style>
        .logo-img {
            max-width: 150px; /* o el tamaño que desees */
            height: auto;
        }
</style>
<body class="bg-light">
    <div class="container mt-5">
        <div class="text-center">
            <img src="https://cdn-icons-png.flaticon.com/512/3003/3003984.png" alt="Logo Lavandería" class="img-fluid mb-4 logo-img">
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="text-center">
                    <h2>Selecciona tu Tipo de Usuario</h2>
                </div>
                
                <div class="d-flex justify-content-around mt-4">
                    <a href="<?= site_url('employe_login') ?>" class="btn btn-primary btn-lg" role="button">Empleado</a>
                    <a href="<?= site_url('admin_login') ?>" class="btn btn-primary btn-lg" role="button">Administrador</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
