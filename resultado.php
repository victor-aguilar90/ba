<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include_once 'connection.php';
        try {
            $data = $conexao -> query('select * from Produto');
            echo "<form>";

            while ($row -> $data -> fetch(PDO::FETCH_OBJ)) {
                echo "<input type='text' name='txt_id' reandoly value='".$row->id_prod."'>";
                echo "<input type='text' name='txt_nome' reandoly value='".$row->nome_prod."'>";
                echo "<input type='text' name='txt_desc' reandoly value='".$row->desc_prod."'>";
                echo "<input type='date' name='dt_prod' reandoly value='".$row->data_prod."'>";
                echo "<input type='text' name='txt_preco' reandoly value='".$row->valor_unit_prod."'>";

            }
        }

    ?>
</body>
</html>