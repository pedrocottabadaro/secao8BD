
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>
    <link rel="stylesheet" href="tela-cadastro-produto.css">
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


                </div>
            </div> 

            <h1 id="titleCadastro">Cadastro de Produto</h1>
         

            <div class="imageLogout">
                <img src="../../extra/logout-button.png" onclick="sair()" alt="logout">
            </div>         
        </div>

        <div class="containerCenter">
            <h1>Inserir informações do produto</h1>
                <form class="formulario" method="post" action="../../controller/controller.php">

                    <div class= "field">
                        <input type="hidden" name="action" value="create">
                        <input type="text" id="nome" name="nome" placeholder="Nome completo" required>
                        <input type="text" id="email" name="email" placeholder="E-mail" required>
                        <input type="password" id="senha" name="senha" placeholder="Digite uma senha" required>
                        <input type="password" id="senha2" name="senha2" placeholder="Digite novamente a senha" required>
                    </div>

                    <input type="submit" name="entrar" value="CADASTRAR" onclick="cadastrar()">
                

                </form>

        </div>
     
         
        
     
        
    </div>

</body>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="tela-cadastro-produto.js"></script>

</html>