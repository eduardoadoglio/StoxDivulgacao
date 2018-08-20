

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> contatito </title>
</head>
<body>
	<form method="post">
		Nome: <input type="text" name="nome" required placeholder="Seu nome"><br>
		E-mail: <input type="text" name="email" required placeholder="Seu e-mail"><br>
		<input type="text_area" name="mensagem" required placeholder="Contate-nos e tire suas dúvias, envie suas crítias, elogios e sugestões."><br>
		<input type="submit" value="Enviar">
	</form>

	<?php
		$con = new mysqli('localhost','root','usbw','db_contato');
		if(mysqli_connect_errno()){ 
			printf("Connect failed: %s/n", mysql_connect_error());
			exit();
		} 
		else{
			if( isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
				$nome = $_POST['nome'];
				$email = $_POST['email'];
				$mensagem = $_POST['mensagem'];

				$sql = "insert into tb_contato VALUES (null,'$nome','$email','$mensagem')";
				if(($con->query($sql)){
					echo "<script>alert(Mensagem enviada!)</script>";
				}
				else{
					$result = $con->query($sql);
					echo "<br>".mysqli_errno($con) . ": " . mysqli_error($con) . "\n";
				}
			}
		}	
	?>
</body>
</html>