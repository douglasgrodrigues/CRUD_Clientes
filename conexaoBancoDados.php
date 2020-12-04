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
	}
	
	function inserirPessoa(){
		$banco = new mysqli("localhost", "root", "", "loja");
		$sql = "INSERT INTO pessoavirtual(tipoPessoa, nome, sobrenome, sexo, documento, telefone,
		celular, nascimento, cep, rua, numero, complemento, referencia, bairro, cidade, estado) 
		VALUES ('{$_POST["tipoPessoa"]}', '{$_POST["nome"]}','{$_POST["sobrenome"]}','{$_POST["sexo"]}',
		'{$_POST["documento"]}',  '{$_POST["telefone"]}', '{$_POST["celular"]}',  '{$_POST["nascimento"]}',
		'{$_POST["cep"]}',		  '{$_POST["rua"]}',	  '{$_POST["numero"]}',   '{$_POST["complemento"]}',
		'{$_POST["referencia"]}', '{$_POST["bairro"]}',   '{$_POST["cidade"]}',   '{$_POST["estado"]}')";
		$banco->query($sql);
		$banco->close();
	}
	
	function alterarPessoa(){
		$banco = new mysqli("localhost", "root", "","loja");
		$sql = "UPDATE pessoavirtual SET nome='{$_POST["nome"]}', nascimento='{$_POST["nascimento"]}',
		endereco='{$_POST["endereco"]}', telefone='{$_POST["telefone"]}' WHERE id='{$_POST["id"]}'";
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
		$pessoas = mysqli_fetch_assoc($resultadoQuery);
		return $pessoas;
	}
	
	
	function  voltarIndex(){
		header ("Location:index.php");
	}
?>




