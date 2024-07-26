<?php
session_start();
include_once("../conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LISTA DE USUARIOS CADASTRADO</h1>
    <HR></HR>

    <?php
    $result_cliente = "SELECT codigo, nome, cpf, rg, telefone from e1_clientes";

    $resultado_cliente = mysqli_query($conn, $result_cliente);

    while($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
        echo "CÒDIGO....................:".$row_cliente['codigo']. "<br>";
        echo "NOME....................:".$row_cliente['nome']. "<br>";
        echo "CPF....................:".$row_cliente['cpf']. "<br>";
        echo "RG....................:".$row_cliente['rg']. "<br>";
        echo "TELEFONE....................:".$row_cliente['telefone']. "<br>";
        echo "--------------------------------------------------<br>";   
    };

    ?>
    <hr>
    <center>
        <a href="cliente.html"><img src="../img/img/retornar.png" width="20" height="20"> </a> 
    </center>


</body>
</html>