<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Contato</title>
	<meta charset="utf-8">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nome = $_POST["nome"];
	$email = $_POST["email"];
	$mensagem = $_POST["mensagem"];
	$anexo = $_FILES["anexo"]["name"];

	echo "<h2>Dados recebidos:</h2>";
	echo "<p>Nome: " . $nome . "</p>";
	echo "<p>E-mail: " . $email . "</p>";
	echo "<p>Mensagem: " . $mensagem . "</p>";
	if ($anexo != "") {
		echo "<p>Anexo: <a href='" . $anexo . "'>" . $anexo . "</a></p>";
	} else {
		echo "<p>Anexo: nenhum</p>";
	}
}
?>
<a href="index.html">
<button">voltar</button>
</a>
</body>
</html>


