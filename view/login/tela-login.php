<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGLFC</title>
    <link rel="stylesheet" href="tela-login.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   
</head>
<body>

    <div class="container" >
        
        <div class="containerTitle">
            <h1 id="titleLogin">Minas Verdes Doces</h1>
        </div>

        <h1>Seja bem-vindo</h1>
         
        <form class="formulario" method="post" action="../../controller/controller.php">
            <input type="hidden" name="action" value="login" required>
            <div class= "field">
                <label for="email">E-mail:</label>
                <input type="text" id="email" name="email" required>
            </div>

            <div class="field">
                <label for="senha">Senha:</label>
                <input type="password" id="senha" name="senha">
            </div>

            <input type="submit" name="entrar" value="ENTRAR">

            <div class="field">

                <a href="../cadastro/tela-cadastro.php">Novo por aqui? Cadastre-se</a>
            </div>
        </form>
     
        </div>
      </div>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="tela-login.js"></script>

</html>