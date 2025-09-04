<?php

$name = isset($_POST['NOME']) ? $_POST['NOME'] : null;      
$cpf = isset($_POST['CPF']) ? $_POST['CPF'] : null;               
$email = isset($_POST['EMAIL']) ? $_POST['EMAIL'] : null;

    insertClients($name, $cpf, $email);

function connect(){
    try {
       $pdo = new  PDO('mysql:host=192.168.200.1;dbname=estoquedb','admin','Jbraun@2025');
       return $pdo;
     } catch (\Throwable $th) { 
        throw $th;
    }
}

function selectClients(){
    $db = connect();
    $query = $db->prepare("SELECT * FROM cliente");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
} 

function selectProdutos(){
    $db = connect();
    $query = $db->prepare("SELECT * FROM produto");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
   return $result;
}

function insertClients($name, $cpf, $email){
    $db = connect();
    $query = $db->prepare("INSERT INTO cliente (NOME, CPF, EMAIL) VALUES ('$name', '$cpf', '$email')");
    $query->execute();
    
}