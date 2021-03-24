<?php

require('../database/connection.php');
require('../model/produto/produto.php');

$produto = new Produto();

if($_POST['action'] == 'create'){

    $produto->insertProduto($_POST);
    header('Location:../view/infoProduto/tela-info-produto.php');

} else if($_POST['action'] == 'update'){
    
    
    $produto->updateProduto($_POST);

    header('Location:../view/infoProduto/tela-info-produto.php');
    
} else if($_POST['action'] == 'delete'){
    
    
    $produto->deleteProduto($_POST);

    header('Location:../view/infoProduto/tela-info-produto.php');
    
} 