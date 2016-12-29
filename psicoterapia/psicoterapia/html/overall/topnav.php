<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--sticky mbr-navbar--auto-collapse" id="ext_menu-0">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="#"><img class="mbr-navbar__brand-img mbr-brand__img" src="views/images/logo.jpeg" alt="logo"></a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active"><li class="mbr-navbar__item">
                          <a class="mbr-buttons__link btn text-white" href="#">INICIO</a></li><li class="mbr-navbar__item">

                        <?php
                        if(!isset($_SESSION['app_id'])) {
                          echo '<a class="mbr-buttons__link btn text-white" data-toggle="modal" data-target="#Login">INICIAR SESIÓN</a></li><li class="mbr-navbar__item">
                          <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-danger" data-toggle="modal" data-target="#Registro">REGISTRO</a></li></ul></div>';
                        } else {
                          echo '<a class="mbr-buttons__link btn text-white" href="?view=perfil&id='.$_SESSION['app_id'].'">'. strtoupper($users[$_SESSION['app_id']]['user']) .'</a></li><li class="mbr-navbar__item">
                            <div class="mbr-navbar__column"><ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-inverse mbr-buttons--active"><li class="mbr-navbar__item"><a class="mbr-buttons__btn btn btn-danger" href="?view=logout">CERRAR SESIÓN</a></li></ul></div>"
                          ';
                        }
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
       
        
                  <a href="javascript:cargarExterno('adm.php','intro');" class="links">Introducción</a><br>
                  <a href="http://localhost/chat2/chat.php" class="links">chat</a><br>
                  <a href="javascript:cargarExterno('http://entrenamientoem.com.mx/subirpdf/index.php','intro');" class="links">subir contenido</a><br>
                  <a href="javascript:cargarExterno('http://entrenamientoem.com.mx/subirpdf/lista.php','intro');" class="links">administrar contenido</a><br>
                  <a href="http://www.entrenamientoem.com.mx:2082/cpsess6068893943/3rdparty/phpMyAdmin/index.php#PMAURL-3:sql.php?db=entrena2_psicoterapia&table=users&server=1&target=&token=d47f16c16f1513654ce7b97bb3f578e2" class="links">administrar usuarios</a><br>
                  
                  

        
        
        
        
</section>




<?php
if(!isset($_SESSION['app_id'])) {
  include(HTML_DIR . '/public/login.html');
  include(HTML_DIR . '/public/reg.html');
  include(HTML_DIR . '/public/lostpass.html');
}
?>