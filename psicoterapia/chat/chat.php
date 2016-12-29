<?php
session_start();
include_once "defines.php";
require_once('classes/BD.class.php');
BD::conn();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <link href="css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript">
            $.noConflict();
        </script>
        
    </head>
    <body>
        
        <aside id="users_online">
            <ul>
                <?php for($i=1; $i<=8; $i++):?>
                <li id="5">
                    <div class="imgSmall"><img src="fotos/lucas.jpg" border="0" /></div>
                    <a href="#" id="3:5" class="comecar">Juan Sosa</a>
                    <span id="5" class="status on"></span>
                </li>
                <?php endfor;?>
                
            </ul>
        </aside>
        
        <aside id="chats">

        </aside>
        <script type="text/javascript" src="js/functions.js"></script>
        
    </body>
</html>
          


<!--<div class="window" id="janela_x">
                <div class="header_window"><a href="#" class="close">X</a><span class="name">Fulano de tal</span><span id="5" class="status on"></span></div>
                <div class="body">
                    <div class="mensagens">
                        <ul>
                           
                            
                            
                    </div>
                    <div class="send_message" id="3:5">
                        <input type="text" name="mensagem" class="msg" id="3:5" />
                    </div>
                </div>
            </div> -->