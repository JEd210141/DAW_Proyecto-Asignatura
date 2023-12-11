<!-- navbar.php -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Lavandería</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('dashboard_empleado') ?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Órdenes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link badge-danger" href="<?= base_url('employe/cerrar_sesion') ?>">Cerrar Sesión</a>
            </li>
        </ul>
    </div>
</nav>
