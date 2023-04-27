<!DOCTYPE html>
<html>
<head>
	<title>Dados Recebidos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
  
</head>
<body id=body1>
	<header>
		<h1>Dados Recebidos</h1>
	</header>
	<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];
	$anexo = $_FILES["anexo"]["name"];

	echo "<p id=p1>Nome: " . $nome . "</p>";
	echo "<p id=p1>E-mail: " . $email . "</p>";
	echo "<p id=p1>Mensagem: " . $mensagem . "</p>";
	if ($anexo != "") {
		echo "<p id=p1>Anexo: <a href='" . $anexo . "'>" . $anexo . "</a></p>";
	} else {
		echo "<p id=p1>Anexo: nenhum</p>";
	}
}
?>
<a href="index.html">
<button type="button">Voltar</button></a>
	<footer>
		<p>Feito por Marcos Vinicios Gomes Andrade </p>
    	<p>dia 27/04/2023</p>
		<p>Email para contato: marcosps455@gmail.com</p>

	</footer>
</body>
</html>