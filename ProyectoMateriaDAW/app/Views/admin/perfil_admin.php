<!-- perfil_admin.php -->
<h2>Perfil del Administrador</h2>

<!-- Mostrar información actual del perfil -->

<form action="<?= base_url('admin/actualizar_perfil') ?>" method="post">
    <!-- Campos de formulario para editar el perfil -->
    <label for="username">Nombre de Usuario:</label>
    <input type="text" name="username" value="<?= esc($perfil['username']) ?>" required>

    <label for="password">Contraseña:</label>
    <input type="password" name="password" required>

    <!-- Otros campos del perfil, si los hay -->

    <button type="submit">Guardar Cambios</button>
</form>
