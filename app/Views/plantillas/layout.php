<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/bootstrap-custom.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/estilo.css">
    <title><?php echo $this->renderSection('titulo') ?></title>
</head>

<body>
   
    <?php echo $this->renderSection('contenido') ?>



    <script src="<?php echo base_url() ?>js/bootstrap.bundle.min.js "></script>
</body>

</html>