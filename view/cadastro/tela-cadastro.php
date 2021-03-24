<?php

require_once '../../database/connection.php';
require_once '../../model/usuario/usuario.php';

$submit = "Cadastrar";
$action = "create";
$msg = "Já tenho uma conta";

if (!empty($_GET)) {

    $msg = "";
    $action = "update";
    $usuario = new Usuario;
    $usuario = $usuario->getUsuario(intval($_GET['id']));
    $submit = "Alterar";

}


$id = (!empty($usuario)) ? $_GET['id'] : "";
$nome = (!empty($usuario)) ? $usuario['NOME'] : "";
$telefone = (!empty($usuario)) ? $usuario['TELEFONE'] : "";
$email = (!empty($usuario)) ? $usuario['EMAIL'] : "";
$login = (!empty($usuario)) ? $usuario['LOGIN'] : "";
$senha = (!empty($usuario)) ? $usuario['SENHA'] : "";
$cpf = (!empty($usuario)) ? $usuario['CPF'] : "";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="tela-cadastro.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
</head>
<body>

    <div class="container" >
        
        <div class="containerTitle">
            <h1 id="titleCadastro"><?=$submit?></h1>
        </div>

        <h1>Precisamos de algumas informações suas</h1>
         
        <form class="formulario" method="post" action="../../controller/controller_usuario.php">

            <div class= "field">
                <input type="hidden" name="action" value="<?=$action?>">
                <input type="hidden" name="id" value="<?=$id?>">
                <input type="text"  name="nome" placeholder="Nome completo"  value="<?=$nome?>" required>
                <input type="text"  name="email" placeholder="E-mail" value="<?=$email?>"required>
                <input type="text"  name="telefone" placeholder="Telefone" value="<?=$telefone?>" required>
                <input type="text"  name="cpf" placeholder="CPF" value="<?=$cpf?>" required>
                <input type="text"  name="login" placeholder="Login" value="<?=$login?>" required>
                <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required>
                <input type="password" id="senha2" name="senha2" placeholder="Digite novamente a senha" required>
            </div>

            <input type="submit" value="<?=$submit?>">
            <div class="field">
                <a href="../login/tela-login.php"><?=$msg?></label>
            </div>

        </form>
     
        </div>
      </div>

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="tela-cadastro.js"></script>

</html>