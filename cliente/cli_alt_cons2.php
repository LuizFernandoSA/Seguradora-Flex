<?php
session_start();
include_once("../conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta cliente</title>
</head>
<body>
    
<center>
    <h1>**CONSULTA CLIENTE PARA ALTERAÇÃO</h1>
</center>

<?php
$cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_STRING);
$result_cliente = "SELECT codigo, nome, cpf, rg, telefone from e1_clientes where codigo=$cod";

$resultado_cliente = mysqli_query($conn, $result_cliente);

?>
<form method="POST" name="alterar_usuarios" action="cli_alt_atualizar.php">
    <?php

if($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
    echo "Costa na nossa base de dados o udúario: <br>";

    echo "<label>CÓDIGO..........</label>
    <input type='number' name'cod' placeholder='".$row_cliente['cliente']."'<br><br>";

    echo "<label>NOME..........</label>
    <input type='number' name'nome' placeholder='".$row_cliente['nome']."'<br><br>";

    echo "<label>CPF..........</label>
    <input type='number' name'cp' placeholder='".$row_cliente['cpf']."'<br><br>";

    echo "<label>RG..........</label>
    <input type='number' name'rg' placeholder='".$row_cliente['rg']."'<br><br>";

    echo "<label>TELEFONE..........</label>
    <input type='number' name'tel' placeholder='".$row_cliente['tel']."'<br><br>";

    echo "<input type='submit' name'Atualizar' value='Atualizar'>";


}else{
    echo "<h3><font color='red'> Usuario não existe!!!</font></h3>";
}

?>

</body>
</html>