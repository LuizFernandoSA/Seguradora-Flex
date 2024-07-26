<?php
session_start();
include_once("..//conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONSULTA USUÁRIO</title>
</head>
<body>
    <center>
        <br>
        <br>
        <h1>Pesquisa usuário da SEGURADORA</h1>
    </center>
    
    <form action="cli_cons2.php" method="POST"> <!--consultar pelo código-->
    <label>CÓDIGO</label>
    <input type="text" name="cod" placeholder="Digite o código">
    <input type="submit" name="Consultar">
    <br>
    </form>

    <br>
    <!--consulta todos os registros-->
    <a href="cli_consx.php"><button  style="background: #069cc2; 
				border-radius: 6px;
				padding: 10px; 
				cursor: pointer; 
				color: #fff; 
				border: none; 
				font-size: 10px">Pesquisa todos os registros</button></a>

                <hr>

                <center>
                <a href="../index.html"><img src="../img/img/retornar.png" width="20" height="20"> </a>
                </center>

</body>
</html>