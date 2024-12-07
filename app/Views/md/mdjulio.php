<?= $this->extend('plantillas/main_layout'); ?>
<?= $this->section('titulo') ?>
md_julio
<?= $this->endSection() ?>

<?= $this->section('contenido'); ?>

<div class="container">
  <div class="card mt-5">
    <h5> <?= view('partials/_session') ?> </h5>
    
    <div class="container titulo">
      <h1>HOJA DE VIDA</h1>
      <hr />
    </div>
    <section class="container xsectionx ">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <div class="card-body pt-4 d-flex flex-column align-items-center">
              <img src="img_layout/julio.jpg" alt="" class="rounded-circle" style="width: 120px;">
              <h3>JULIO CAJAS ARDILES</h3>
              <h4>MD Radiologo</h4>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="card">
            <div class="card-body pt-3">
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active ">
                  <h5>Resumen</h5>
                  <p class="medium fst-italic">Medico Radiologo Asistente del Hospital Nacional Guillermo Almenara Irygoyen, en el Servicio de Ecotomografia desde el 09 de Noviembre del 2007 hasta la fecha. Medico Radiologo en el Servicio de tomografia del Instituto Nacional de Ciencias Neurologicas desde el 01 de febrero del 2003 hasta el 31 de Octubre del 2007.</p>
                  <h5>Datos Personales</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label ">Nombre</div>
                    <div class="col-lg-9 col-md-8">Julio Cajas Ardiles</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Trabajo</div>
                    <div class="col-lg-9 col-md-8">Hospital Nacional Guillermo Almenara Irigoyen</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Cargo</div>
                    <div class="col-lg-9 col-md-8">Medico Asistente</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pais</div>
                    <div class="col-lg-9 col-md-8">Peru</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Direccion</div>
                    <div class="col-lg-9 col-md-8">Jr. Durero 226, San Borja</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Celular</div>
                    <div class="col-lg-9 col-md-8">914808937</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Email</div>
                    <div class="col-lg-9 col-md-8">jcajasardiles2@gmail.com</div>
                  </div>
                  <h5>Estudios Superiores</h5>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Pregrado</div>
                    <div class="col-lg-9 col-md-8">Medico Cirujano UNMSM mayo 1994</div>
                  </div>
                  <div class="row">
                    <div class="col-lg-3 col-md-4 label">Post-Grado</div>
                    <div class="col-lg-9 col-md-8">Medico-Radiologo UNMSM julio 2002</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<br>

<?= $this->endSection(); ?>