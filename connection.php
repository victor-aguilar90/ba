<?php

$host = "localhost";
$port = "8080";
$user = "root";
$banco = "loja";
$senha = "";

try {
    $conexao = new PDO('mysql:host='.$host.'dbname='.$banco,$user,$senha);
    $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    echo 'Erro: '.$e -> getMessage();
};



?>