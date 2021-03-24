<?php

session_start();

class Produto{

    public function getProdutoAll(){

        global $conn;

        $dados = array();

        $sql = "SELECT * FROM produto";

        try{

            $stmt=$conn->prepare($sql);
            $stmt->execute();

            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                $dados[] = $row[''];

            }
            
            return $dados;


        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }

    }

    public function getProduto($data){

        global $conn;

       

        $sql = "SELECT * FROM produto WHERE CD_PRODUTO = {$data['id']}";

        try{

            $stmt=$conn->prepare($sql);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
            
            
            return $row;


        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }

    }

   



    public function insertProduto($data) {
        global $conn;

       

        $sql = "INSERT INTO produto VALUES (NULL, '{$data['nome']}', '{$data['unidade']}', {$data['peso']}, {$data['qtd_estoque']}, {$data['preco']})";

        try{

            $stmt=$conn->prepare($sql);
            $stmt->execute();

        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function updateProduto($data) {
        global $conn;

       

        $sql = "UPDATE produto SET NOME = '{$data['nome']}', UNIDADE = '{$data['unidade']}', PESO = {$data['id']}, QTD_ESTOQUE = {$data['qtd_estoque']}, PRECO = {$data['preco']} WHERE CD_PRODUTO = {$data['id']}";

        try{

            $stmt=$conn->prepare($sql);
            $stmt->execute();

        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function deleteProduto($data) {
        global $conn;

       

        $sql = "DELETE FROM produto WHERE CD_PRODUTO = {$data['id']}";

        try{

            $stmt=$conn->prepare($sql);
            $stmt->execute();

        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

 

}