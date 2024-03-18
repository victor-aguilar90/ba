<?php

$host = "localhost"; //Maquina servidora
$port = 3306; //porta do serviço
$user = "root"; //nome do usuario do serviço
$banco = "loja"; //nome do banco de dados
$senha = ""; // senha do banco de 

try {
    $conexao = new PDO('mysql:host='.$host.'; dbname='.$banco,$user,$senha);
    $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e){
    echo 'Erro: '.$e -> getMessage();
};

?>