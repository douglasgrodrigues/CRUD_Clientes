<?php
	
	if (isset($_POST["acao"])){
		if ($_POST["acao"]=="inserir") {
			inserirPessoa();
		}
		
		if ($_POST["acao"]=="excluir") {
			excluirPessoa();
		}
		
		if ($_POST["acao"]=="alterar") {
			alterarPessoa();
		}
		
		if ($_POST["acao"]=="home") {
			voltarIndex();
		}
	}
	
	function inserirPessoa(){
		$banco = new mysqli("localhost", "root", "", "loja");
		$sql = "INSERT INTO pessoavirtual(tipoPessoa, nome, sobrenome, sexo, documento, telefone,
		celular, nascimento, cep, rua, numero, complemento, referencia, bairro, cidade, estado) 
		VALUES( '{$_POST["tipoPessoa"]}', '{$_POST["nome"]}','{$_POST["sobrenome"]}','{$_POST["sexo"]}',
		'{$_POST["documento"]}',  '{$_POST["telefone"]}', '{$_POST["celular"]}',  '{$_POST["nascimento"]}',
		'{$_POST["cep"]}',		  '{$_POST["rua"]}',	  '{$_POST["numero"]}',   '{$_POST["complemento"]}',
		'{$_POST["referencia"]}', '{$_POST["bairro"]}',   '{$_POST["cidade"]}',   '{$_POST["estado"]}')";
		$banco->query($sql);
		$banco->close();
		voltarIndex();
	}
	
	function alterarPessoa(){
		$banco = new mysqli("localhost", "root", "","loja");
		$sql = "UPDATE pessoavirtual SET tipoPessoa='{$_POST["tipoPessoa"]}', nome='{$_POST["nome"]}', sobrenome='{$_POST["sobrenome"]}', sexo='{$_POST["sexo"]}' ,
		documento='{$_POST["documento"]}', telefone='{$_POST["telefone"]}', celular='{$_POST["celular"]}', nascimento='{$_POST["nascimento"]}', 
		cep='{$_POST["cep"]}', rua='{$_POST["rua"]}', numero='{$_POST["numero"]}', complemento='{$_POST["complemento"]}',
		referencia='{$_POST["referencia"]}', bairro='{$_POST["bairro"]}', cidade='{$_POST["cidade"]}', estado='{$_POST["estado"]}'
		WHERE id='{$_POST["id"]}'";
		
		$banco->query($sql);
		$banco->close();
		voltarIndex();
	}
	
	function excluirPessoa(){
		$banco = new mysqli("localhost", "root", "","loja");
		$sql = "DELETE FROM pessoavirtual WHERE id='{$_POST["id"]}'";
		$banco->query($sql);
		$banco->close();
		voltarIndex();
	}
	
	function selectAllPessoa(){
		$banco = new mysqli("localhost", "root", "", "loja");
		$sql = "SELECT * FROM pessoavirtual ORDER by nome";
		$banco->query($sql);
		$resultadoQuery = $banco->query($sql);
		while ($row = mysqli_fetch_array($resultadoQuery)){ 
			$grupo [] = $row;	
		}	
		return $grupo;
	}
	
	function selectIdPessoa(){
		$banco = new mysqli("localhost", "root", "", "loja");
		$sql = "SELECT * FROM pessoavirtual WHERE id='{$_POST["id"]}'";
		$resultadoQuery = $banco->query($sql);
		$pessoavirtual = mysqli_fetch_assoc($resultadoQuery);
		return $pessoavirtual;
	}
	
	
	function  voltarIndex(){
		header ("Location:index.php");
	}
?>




