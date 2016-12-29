
<?php
	session_start();
	include_once "defines.php";
	require_once('classes/BD.class.php');
	BD::conn();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <style type="text/css">
            *{margin:0; padding:0; box-sizing:border-box;}
            body{background:#ebebeb;}
            .right{float:right;}
            .botao{padding:6px 8px; background:linear-gradient(to bottom, #069, #09f 130%); border:1px solid white;
            font:16px tahoma, arial; color:white; border-radius: 5px;}
            .formulario{position:absolute; top:50%; left:50%;width:500px;height:200px;background:white;
            border-radius:6px;margin-left:-250px;margin-top:-100px; padding:10px;box-shadow:#666 1px 1px 30px;}
            h1{float:left;
               width:100%;
               margin-bottom:10px;
               font:24px "Trebuchet MS", tahoma, arial;
               font-weight: bold;
               color:#069;
               padding:5px;
               text-align: center;
            }
            .formulario label{
                float:left;
                width:100%;
            }
            .formulario label span{
                float:left;
                width:100%;
                font:15px tahoma,arial;
                color:#666;
                margin-bottom:10px;
            }
            .formulario label input{
                float:left;
                width:100%;
                padding:6px;
                background:white;
                border-radius:5px;
                border:1px solid #999;
                outline:none;
                margin-bottom:10px;
            }
        </style>
    </head>
    <body>
        <div class="formulario">
            <h1>bienvenido al chat</h1>
            <?php
                if(isset($_POST['acao']) && $_POST['acao'] == 'logar'){
                    $email = strip_tags(trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING)));
                    if($email == ''){
                        echo 'introduzca su email';
                    }else{
                        $pegaUser = BD::conn()->prepare("SELECT * FROM 'usuarios' WHERE 'email' = ?");
                        $pegaUser->execute(array($email));
                        
                        if($pegaUser->rowCount() == 0){
                            echo 'No se encontro este usuario';
                        }else{
                            while($row = $pegaUser->fetchObject()){
                                $_SESSION['email_logado'] = $email;
                                $_SESSION['id_user'] = $row->id;
                                header("Location: chat.php");
                            }
                        }
                    }
                }
            ?>
            <form action="" method="post" enctype="multipart/form-data">
                <label>
                    <span>Introduce tu e-mail</span>
                    <input type="text" name="email" placeholder="e-mail"/>
                </label>
                <input type="hidden" name="acao" value="logar" />
                <input type="submit" value="Entrar" class="botao right" />
            </form>
        </div>
    </body>
</html>