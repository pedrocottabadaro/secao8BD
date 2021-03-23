<?php 

// session_start();

// require('../../model/produto/produto.php');
// require('../../database/connection.php');

// $produto = new Produto;
// $produto = $produto->getProduto($_SESSION['id']);

// echo '<pre>';
// print_r($usuario);
// echo '</pre>';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suas informações</title>
    <link rel="stylesheet" href="tela-info-produto.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
</head>
<body>

    <div class="container" >
        <div id="containerDropdown">
            <div class="dropdown">
                <img src="../../extra/menu.png" class="dropbtn" onclick="openNav()" alt="logout">

                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <a href="../produto/tela-produto.php">Menu</a>
                    <a href="../info/tela-info-user.php">Alterar informações</a>
                    <a href="../infoProduto/tela-info-produto.php">Alterar Produto</a>
                    <a href="../cadastroProduto/tela-cadastro-produto.php">Cadastrar Produto</a>

                </div>
            </div> 

            <h1 id="titleInfo">Alterar Produto</h1>

            <div class="imageLogout">
                <img src="../../extra/logout-button.png" onclick="sair()" alt="logout">
            </div>         
        </div>

     

        <form class="formulario" method="post" action="../../controller/controller.php">

            <div class= "field">
                <!-- <input type="hidden" name="action" value="update">
                <input type="hidden" name="id" value="<?=$usuario['CD_USUARIO']?>">
                <input type="text" id="nome" name="nome" value="<?=$usuario['NOME']?>" required>
                <input type="text" id="email" name="email" value="<?=$usuario['EMAIL']?>" required>
                <input type="password" id="senha" name="senha" value="<?=$usuario['SENHA']?>" required>
                <input type="password" id="senha2" name="senha2" value="<?=$usuario['SENHA']?>" required> -->
            </div>
           
            <input class="alterar" type="submit" value="ALTERAR" onclick="alterar()">

        </form>
     
        </div>
      </div>

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="tela-info-produto.js"></script>

</html>