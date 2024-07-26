<?php
session_start();
include_once("..//conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta código cliente</title>
</head>
<body>

<?php
$cod = filter_input(INPUT_POST, 'cod', FILTER_SANITIZE_STRING);
$result_cliente = "SELECT codigo, nome from e1_clientes where codigo=$cod";

$resultado_cliente = mysqli_query($conn, $result_cliente);

if($row_cliente = mysqli_fetch_assoc($resultado_cliente)){
    echo "CODIGO.....:".$row_cliente['codigo']."<br>";
    echo "NOME.....:".$row_cliente['nome']."<br>";

}else{
    echo "Usuário não existente!!!";
}
?>

<center>
    <a href="../index.html"><img src="../img/img/retornar.png" width="20" height="20"> </a>
</center>

</body>
</html>