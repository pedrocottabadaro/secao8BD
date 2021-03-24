<?php

require('../database/connection.php');
require('../model/produto/produto.php');

$produto = new Produto();

if($_POST['action'] == 'create'){

    print_r($_POST);

    $produto->insertProduto($_POST);
    header('Location:../view/produto/tela-produto.php');

} else if($_POST['action'] == 'update'){
    
    
    $produto->updateProduto($_POST);

    header('Location:../view/produto/tela-produto.php');
    
} else if($_POST['action'] == 'delete'){
    
    
    $produto->deleteProduto($_POST['id']);

    // header('Location:../view/produto/tela-produto.php');
    
} 