<?php
if(isset($_POST) && $_POST["botao"] == "Entrar"){
  if($_POST["login"] == "prof" && $_POST["senha"] == "prof"){
		session_start();
		$_SESSION["nome"] = $_POST["login"];
		header("location: professor.php");
	}else{
		header("location: sair.php");
	}

	if($_POST["login"] == "admin" && $_POST["senha"] == "admin"){
		session_start();
		$_SESSION["nome"] = $_POST["login"];
		header("location: administrador.php");
	}else{
		header("location: sair.php");
	}
}else{
	header("location: sair.php");
}
?>
