<?= $this->extend('plantillas/layout'); ?>

<?= $this->section('titulo') ?>
Index
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

<div class="container mt-5">

    <a class="btn btn-dark" href="<?php echo base_url('Dashboard/movie/new') ?> ">Crear</a>
    <a class="btn btn-dark" href="<?php echo base_url('/') ?> ">Mdjulio</a>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Categoría</th>

                <th>Eliminar</th>
                <th>Ver</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($movies as $key => $m): ?>
                <tr>
                    <td><?= $m->id ?></td>
                    <td><?= $m->title ?></td>
                    <td><?= $m->category_id ?></td>

                    <td>
                        <form action="<?php echo base_url('Dashboard/movie/delete/') ?><?= $m->id ?>" method="POST">
                            <input type="submit" name="submit" value="Borrar" class="btn btn-dark" />
                        </form>
                    </td>
                    <td><a class="btn btn-dark" href="<?php echo base_url('Dashboard/movie/show/') ?><?= $m->id ?>"> Ver</a></td>
                    <td><a class="btn btn-dark" href="<?php echo base_url('Dashboard/movie/edit/') ?><?= $m->id ?>"> Editar</a></td>

                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    <?php //echo $pager->links(); ?>
</div>
<?= $this->endSection(); ?>
