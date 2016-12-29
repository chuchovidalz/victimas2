<?php

if(!empty($_POST['user']) and !empty($_POST['pass'])){
$db = new Conexion();
$data = $db->real_escape_string($_POST['user']);
$pass = Encrypt($_POST['pass']);
$sql = $db->query("SELECT id FROM users WHERE (user='$data' OR email='$data') AND pass='$pass' LIMIT 1;");
if($db->rows($sql) > 0){    
    if($_POST['sesion']) { ini_set('session.cookie_lifetime', time() + (60 * 60 * 24));}
    $_SESSION['app_id'] = $db->recorrer($sql)[0];
    $_SESSION['permisos'] = $db->recorrer($sql)[0];
    
    echo 1;
}else{
    echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>ERROR</strong> Usuario y/o contraseña incorrectos.
</div>';
    
}
$db->liberar($sql);
$db->close();
}else{
    echo '<div class="alert alert-dismissible alert-danger">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <strong>ERROR</strong> No se pueden dejar campor vacíos.
</div>';
}
?>