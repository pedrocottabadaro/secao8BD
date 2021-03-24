<?php

class Usuario{

    public function createUsuario($data){
        global $conn;

        $sql="INSERT INTO usuario (NOME, TELEFONE, EMAIL, LOGIN, SENHA, CPF) VALUES ('{$data['nome']}','{$data['telefone']}','{$data['email']}','{$data['login']}', '{$data['senha']}', '{$data['CPF']}')";

        try{

            $stmt=$conn->prepare($sql);
            $stmt->execute();

        } 
        catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function getUsuario($id){

        global $conn;

        $sql = "SELECT * FROM usuario WHERE CD_USUARIO = $id";

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


    public function updateUsuario($data)
    {
        global $conn;

        $sql = "UPDATE usuario  SET NOME = '{$data['nome']}', TELEFONE = '{$data['telefone']}', EMAIL = '{$data['email']}', LOGIN = '{$data['login']}', SENHA = '{$data['senha']}', CPF = '{$data['cpf']}', WHERE CD_USUARIO = {$data['id']}";

        try {

            $stmt = $conn->prepare($sql);
            $stmt->execute();

        } catch (PDOException $e) {

            echo $e->getMessage();
            
        }
    }

    public function validaLogin($data)
    {
        global $conn;

       

        $sql = "SELECT * FROM usuario WHERE LOGIN = '{$data['login']}' and SENHA = '{$data['senha']}'";

       

        try{

            $stmt=$conn->prepare($sql);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
            if (!empty($row)) {

                return $row['CD_USUARIO'];

            } else {

                return false;

            }


        } 
        catch(PDOException $e){

            echo $e->getMessage();

        }
    }

}