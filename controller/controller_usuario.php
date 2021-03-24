<?php

require('../database/connection.php');
require('../model/usuario/usuario.php');

$usuario = new Usuario();


if($_POST['action'] == 'create'){

    $usuario->createUsuario($_POST);
    header('Location:../view/login/tela-login.php');

} else if($_POST['action'] == 'update'){
    
    
    $usuario->updateUsuario($_POST);

    header('Location:../view/info/tela-info-user.php');
    
} else if($_POST['action'] == 'login'){
    
    $valida = $usuario->validaLogin($_POST);
   
  
    if ($valida) {
 
        session_start();
        $_SESSION['id'] = $valida;
        header('Location:../view/produto/tela-produto.php');

    } else {

        header('Location:../view/login/tela-login.php');
        
    }
    
}