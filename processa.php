if (isset($_POST['botao'])){
   if($_POST['botao'] == 'Avançar'){
		if(!$admin.verificarCadastro($_POST['usuario']){
			$u1 = new Usuario($_POST['nome'],$_POST['matricula'],$_POST['dataNasc'], $_POST['sexo'], $_POST['telefone'], $_POST['usuario'], $_POST['senha'],$_POST['imagem']);
			$u1->inserirCad();
			echo "<script type='text/javascript'>alert('Cadastro concluído com sucesso!');";
			echo "javascript:window.location='teste.php';</script>";
			session_start();
			$_SESSION["nome"] = 'nome';
			header("location: teste.php");
		}else{
		echo "<script type='text/javascript'>alert('Este nome de usuário já existe');";
		echo "javascript:window.location='cadastro.php';</script>";
	}
}