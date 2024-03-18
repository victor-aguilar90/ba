<?php
include_once 'connection.php';
$nome = $_POST['txt_nome'];
$desc = $_POST['txt_desc'];
$data = $_POST['dt_prod'];
$preco = $_POST['txt_preco'];
$preco = str_replace(',', '.', $preco);

try {
    $stmt = $conexao -> prepare("insert into Produto (nome_prod, desc_prod, data_prod, valor_unit_prod) values (?, ?, ?, ?);");
    $stmt -> bindParam(1, $nome);
    $stmt -> bindParam(2, $desc);
    $stmt -> bindParam(3, $data);
    $stmt -> bindParam(4, $preco);
    $stmt -> execute();
    header('location:resultado.php');
    
} catch (Exception $e) {
    echo $e -> getMessage();

};

?>