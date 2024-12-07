<?= $this->extend('plantillas/layout') ?>

<?= $this->section('contenido') ?>


<div class="container">
<?= view ('partials/_form-error') ?>
    <h3>Login</h3>
    <form action="<?= base_url('login_post') ?> " method="post">

        <label for="email">Usuario/Email</label>
        <input class="form-control" type="text" name="email" id="email">

        <label for="contrasena">Contrasena</label>
        <input class="form-control" type="password" name="contrasena" id="contrasena">

        <input class="btn btn-dark mt-4" type="submit" value="Enviar">

    </form>
</div>
<?= $this->endSection() ?>