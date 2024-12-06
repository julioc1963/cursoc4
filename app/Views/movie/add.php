<?= $this->extend('plantillas/layout'); ?>

<?= $this->section('titulo') ?>
Formulario
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

<div class="container">
    <form action="<?php echo base_url('/movie/create') ?>" method="post">
        <label for="title">Title</label>
        <input class="form-control" type="text" id="title" name="title" value="" /><br />
        <label for="category_id">category_id</label>
        <input class="form-control" type="text" id="category_id" name="category_id" value="" /><br />
        <label for="category_id">description</label>
        <textarea class="form-control mb-3" rows="6" name="description" id=""> </textarea>

        <input type="submit" name="submit" value="enviar" class="btn btn-dark" />
        <a class="btn btn-dark" href="<?php echo base_url('movie') ?>">Regresar →</a>
    </form>
</div>

<?= $this->endSection(); ?>