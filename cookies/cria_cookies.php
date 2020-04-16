<?php

	$nome 	= 	$_GET['nome'];
	$cidade =	$_GET['cidade']; 

	setcookie("nome",$nome,time()+5000);
	setcookie("cidade",$cidade,time()+5000);

	header("location:mensagem.php");

?>