<?php include(HTML_DIR . 'overall/header.php'); ?>

<body>
<section class="engine"><a rel="nofollow" href="#"><?php echo APP_TITLE ?></a></section>

<?php include(HTML_DIR . '/overall/topnav.php');  ?>

 

<?php
if(isset($_GET['success'])) {
  echo '<section class="mbr-section mbr-after-navbar" id="content1-10">
  <div class="mbr-section__container container mbr-section__container--isolated">
  <div class="alert alert-dismissible alert-success">
    <strong>Activado!</strong> tu usuario ha sido activado correctamente.
  </div>
  </div>
  </section>';
}
?>

<?php
if(isset($_GET['error'])) {
  echo '<section class="mbr-section mbr-after-navbar" id="content1-10">
  <div class="mbr-section__container container mbr-section__container--isolated">
  <div class="alert alert-dismissible alert-danger">
    <strong>Error!</strong></strong> no se ha podido activar tu usuario.
  </div>
  </div>
  </section>';
}
?>





<?php
if($users[$_SESSION['app_id']]['permisos'] == 2){
echo '<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
               
            <p>
              Texto de relleno ADMINISTRADOR
            </p>
               
        
                <section id="intro">
                
                </section>
                
            
          </div>
        </div>
    </div>
</section>';
}

if($users[$_SESSION['app_id']]['permisos'] == 1){
echo '<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            <p>
              Texto de relleno PACIENTE
              

                <section id="intro">

<p>Esta es la página de inicio de paciente.</p><br>
                      <object data="lm555.pdf" type="application/pdf" width="100%" height="800">
                  <p>Problema. <a href="comprobante.pdf">Bajar.</a></p>
              </object>

                </section>
            </p>
          </div>
        </div>
    </div>
</section>';
}

if($users[$_SESSION['app_id']]['permisos'] == 0){

echo '<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            <p>
              Texto de relleno SIN INICIO DE SESION             
            </p>
          </div>
        </div>
    </div>
</section>';
}
?>

<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            <p>
              Texto de relleno             
            </p>
          </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-after-navbar" id="content1-10">
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="row">
            <div class="mbr-article mbr-article--wysiwyg col-sm-8 col-sm-offset-2">
            <p>
              Texto de relleno
            </p>
          </div>
        </div>
    </div>
</section>

<?php include(HTML_DIR . 'overall/footer.php'); ?>

</body>
</html>