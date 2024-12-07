<?= $this->extend('plantillas/layout') ?>

<?= $this->section('contenido') ?>

<?= view('partials/_form-error') ?>
<div class="container">
    <h3>Registrarse</h3>
<form action="<?= base_url('register_post') ?>" method="post">

    <label for="usuario">Usuario</label>
    <input class="form-control" type="text" name="usuario" id="usuario">

    <label for="email">Email</label>
    <input class="form-control" type="text" name="email" id="email">

    <label for="contrasena">Contraseña</label>
    <input class="form-control" type="password" name="contrasena" id="contrasena">

    <input class="btn btn-dark mt-3" type="submit" value="Enviar">

</form>
</div>
<?= $this->endSection() ?>