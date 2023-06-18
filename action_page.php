<?php 
	$mensagem1 = $_POST["nome"];
	$mensagem2 = $_POST["sobrenome"];
	$mensagem3 = $_POST["idade"];
	$mensagem4 = $_POST["mensagem"];
	
	//var_dump($_POST);//verificar como a superglobal $_POST é composta
	header("Location: formulario.php?mensagemA=$mensagem1 $mensagem2");
	header("Location: formulario.php?mensagemA=$mensagem3");
	// redirecionar novamente para ofrmulário, enviando a mensagem.
 ?>