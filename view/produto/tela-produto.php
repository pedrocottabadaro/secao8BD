
<?php

require_once '../../database/connection.php';
require_once '../../model/produto/produto.php';

$produto = new Produto;
$produto = $produto->getProdutoAll();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tela Inicial</title>
<link rel="stylesheet" href="tela-produto.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap5.min.css">

</head>
<body >

<div class="containerPage">

    <div id="containerDropdown">
            <div class="dropdownSideBar">

            <div class="imageLogout">
                <a href="../cadastro/tela-cadastro.php?id=<?=$_SESSION['id']?>"><img class="img-icon" src="../../extra/user.png"></a>
            </div>



            </div> 

                <h1 id="titleProdutos">Consulta</h1>
        
                
        
                <div class="imageLogout">
                    <img src="../../extra/logout-button.png" class="img-icon" onclick="sair()" alt="logout">
                </div>             
    </div>
    
    <div class="tablecontainer">
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Unidade</th>
                    <th>Peso</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Remover</th>
                    <th>Editar</th>
                    <th>Adicionar</th>
                   
                </tr>
            </thead>
            <tbody>
                <?php foreach($produto as $key => $value) {?>
                    <tr>
                        <td><?=$value['CD_PRODUTO']?></td>
                        <td><?= $value['NOME']?></td>
                        <td><?= $value['UNIDADE']?></td>
                        <td><?= $value['PESO']?></td>
                        <td><?= $value['QTD_ESTOQUE']?></td>
                        <td><?= $value['PRECO']?></td>
                        <td>
                            <form action="../../controller/controller_produto.php" method="post">
                                <input type="hidden" name="action" value="delete">
                                <input type="hidden" name="id" value="<?=$value['CD_PRODUTO']?>">
                                <button type="submit" class="btn btn-danger"><b>X</b></button>
                            </form>
                        </td>
                        <td><a href="../cadastroProduto/tela-cadastro-produto.php?id=<?=$value['CD_PRODUTO']?>"><img src="../../extra/edit.png" onclick="edit()" alt="editar" id="editbutton"></a>   </td>
                        <td> <a href="../cadastroProduto/tela-cadastro-produto.php"><button class="btn btn-success">Adicionar</button></a></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>

    </div>
   

</div>

</body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="tela-produto.js"></script>
<script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap5.min.js"></script>


</html>