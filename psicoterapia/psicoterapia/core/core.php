<?php

/* El nucleo de la plataforma */

session_start();

#constantes de conexion
define('DB_HOST','localhost');
define('DB_USER','entrena2_1q2w3e');
define('DB_PASS','Tres_1234');
define('DB_NAME','entrena2_psicoterapia');

#Constantes de PHPMailer
define('PHPMAILER_HOST','localhost');
define('PHPMAILER_USER','pruebas@entrenamientoem.com.mx');
define('PHPMAILER_PASS','Tres_1234');
define('PHPMAILER_PORT',465);


#constantes de la app
define('HTML_DIR','html/');
define('APP_TITLE','Plataforma para la Atención a Víctimas');
define('APP_COPY','Copyright &copy; ' . date('Y',time()) . ' Soluciones Virtuales');
define('APP_URL','http://entrenamientoem.com.mx/psicoterapia/psicoterapia/');

#estructura
require('PHPMailer/class.phpmailer.php');
require('core/models/class.Conexion.php');
require('core/bin/functions/Encrypt.php');
require('core/bin/functions/Users.php');
require('core/bin/functions/EmailTemplate.php');
require('core/bin/functions/LostpassTemplate.php');


$users = Users();
?>