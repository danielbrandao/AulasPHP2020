<?php
	$login = $_POST['login'];
	$senha = $_POST['senha'];

	session_start();

	if($login == "aula" && $senha == "php"){
	    $_SESSION['logou'] = 1;
	    header("Location: principal.php");
	}else{
	    $_SESSION['logou'] = 0;
	    header("Location: formulario.html");
	}

	//header("Location: principal.php");
?>