<?php
session_start();
include_once("..//conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CONSULTA CÓDIGO NO BANCO DE DADOS - CLIENTE</h1>

    <?php
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }
    ?>
    <form method="POST" action="cli_alt_cons2.php">
        <label>CÓDIGO</label>
        <input type="text" name="cod" placeholder="Digite o codigo">
    <input type="submit" name="Consultar">
    </form>

    
    <hr>
    <center>
        <a href="cliente.html"><img src="../img/img/retornar.png" width="20" height="20"> </a> 
    </center>


</body>
</html>