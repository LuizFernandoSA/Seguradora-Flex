<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Seguro Flex</title>
</head>
<body>
	<center>
		<header class="cabecalho">
			<h1 class="titulo" align="center">FLEX - SEGURADORA PARA TODOS</h1>
			<br>

			<h2 class="titulo" align="center">ACIDENTES NÃO ACONTECEM POR ACASO, MAS POR DESCASO</h2>
			<br>

			<h2 class="titulo" align="center">INCLUSÃO DE CLIENTES</h2>
			<br>
			
		</header>

		<br>
		<?php 

		if (isset($_SESSION['msg'])) {
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
			
		}

		 ?>

		 <div class="form-container">
		 	<form action="cli_pro.php" method="POST">

		 		<label>Código:</label>
		 		<input type="number" name="cod" maxlength="3" required autofocus placeholder="Digite o código" > <br><br>

		 		<label>Nome:</label>
		 		<input type="text" name="nome" maxlength="50" required placeholder="Digite o nome"><br><br>

		 		<label>RG:</label>
		 		<input type="text" name="rg" maxlength="10" required placeholder="Digite o RG"><br>
		 		<br>

		 		<label>CPF:</label>
		 		<input type="text" name="cpf" maxlength="15" required placeholder="999.999.999/99"><BR
		 		><BR>

		 		<label>Telefone:</label>
		 		<input type="text" name="tel" maxlength="12" required placeholder="(99)9999-9999"><br><br>

		 		<input type="submit" value="INCLUIR"> 
		 		
		 	</form>
		 	

		 </div>
		 <br>
		 <br>
		 <br>
		 <br>
		 <br>
		<a href="../index.html"><img src="../img/img/retornar.png" width="20" height="20"> </a>	





	</center>

</body>
</html>