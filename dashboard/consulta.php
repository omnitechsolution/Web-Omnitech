<?php

include("../includes/db.php");
ini_set('display_errors','Off');

$errors = [];
$data = [];

if (isset($_POST["name"]) and isset($_POST["surname"]) and isset($_POST["email"]) and isset($_POST["message"])){
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $sql = $pdo->prepare("INSERT INTO message (nome, sobrenome, email, mensagem) VALUES (?, ?, ?, ?)");
    try{
        $sql->execute([$name, $surname, $email, $message]);
        echo "Sua mensagem foi enviada com sucesso!";   
    }catch(Exception $e){
        // echo "Sua mensagem não foi enviada!",$e->getMessage();   
        echo "Sua mensagem não foi enviada!";   
    }
    exit;
}
?>