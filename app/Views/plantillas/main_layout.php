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
    <div class="container fixed-top">

        <nav class="navbar navbar-expand-lg navbar-secondary bg-secondary row justify-content-center align-items-center py-1">
            <div class="container-fluid"><span><img class="logo-login" src="<?php echo base_url(); ?>img_layout/logo_md.png" alt=""><a class="navbar-brand logo-titulo  ms-3 me-5 " href="<?php echo base_url(); ?>/">MD JULIO CAJAS</a></span>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav me-auto">

                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url(); ?>webs ">Webs de Interes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Casos Clinicos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href=" <?php echo base_url('Dashboard/movie'); ?>">Movies</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ">
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="<?php echo base_url(); ?>img_layout/julio.jpg" class="logo-login" alt="">
                                Usuario
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item" href=" <?php echo base_url(); ?>register">Registro</a></li>
                                <li><a class="dropdown-item" href="<?php echo base_url(); ?>login ">Login</a></li>
                                <li><a class="dropdown-item" href=" <?php echo base_url(); ?>logout">Salir</a></li>

                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row ">
            <div class="col  ">
                <img src="<?php echo base_url(); ?>img_layout/banner5.jpg" alt="bb" class="img-fluid">
            </div>
        </div>
    </div>



    <?php echo $this->renderSection('contenido') ?>



    <script src="<?php echo base_url() ?>js/bootstrap.bundle.min.js "></script>
</body>

</html>