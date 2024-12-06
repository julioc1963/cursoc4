<?= $this->extend('plantillas/layout'); ?>

<?= $this->section('titulo') ?>
Editar
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

<div class="container mt-5">
    <div class="card bg-info">
        <?= view('partials/_form-error') ?>
    </div>
    <form action=" <?php echo base_url('/Dashboard/movie/update/') ?><?php echo $view['id'] ?>" method="post">
        <label for="title">Title</label>
        <input class="form-control" type="text" id="title" name="title" value="<?php echo $view['title'] ?>" /><br />

        <label for="category_id">category_id</label>
        <input class="form-control" type="text" id="category_id" name="category_id" value="<?php echo $view['category_id'] ?>" /><br />

        <label for="category_id">description</label>
        <textarea class="form-control mb-3" rows="6" name="description" id=""> <?php echo $view['description'] ?> </textarea>

        <input type="submit" name="submit" value="enviar" class="btn btn-dark" />

        <a class="btn btn-dark" href="<?php echo base_url('Dashboard/movie') ?>">Regresar →</a>
    </form>
</div>

<?= $this->endSection(); ?>