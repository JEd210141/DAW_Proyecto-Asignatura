<!-- navbar_admin.php -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?= base_url('dashboard_administrador') ?>">Lavandería</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url('admin/login') ?>">Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('admin/empleados_listas') ?>">Empleados</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<? base_url('admin/clientes_list') ?>">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<? base_url('admin/perfil_admin') ?>">Perfil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link badge-danger" href="<?= base_url('admin/cerrar_sesion') ?>" data-url="/admin/cerrar_session">Cerrar Sesión</a>
            </li>
        </ul>
    </div>
</nav>
