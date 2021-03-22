<?php

session_start();

class Produto{

    public function getProdutoAll(){

        global $conn;

        $dados = array();

        $sql = "SELECT * FROM  WHERE  = ";

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

    public function getProduto($id){

        global $conn;

       

        $sql = "SELECT * FROM pergunta WHERE CD_PERGUNTA = $id";

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

   



    public function insertProduto() {
        global $conn;

       

        $sql = "INSERT INTO  VALUES (NULL, , , )";

        try{

            $stmt=$conn->prepare($sql);
            $stmt->execute();

        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

 

}