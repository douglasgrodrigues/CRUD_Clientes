<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<?php include("conexaoBancoDados.php");
	$pessoavirtual = selectIdPessoa();
?>

<html>
	
<head>	
</head>

<body>
	
	<form class="form-horizontal" name="dadosPessoa" method="POST" action="conexaoBancoDados.php">
		<fieldset>
			<div class="panel panel-primary">
				<div class="panel-heading">Alterar</div>
				<div class="panel-body">
					<div class="form-group">
										
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">Nome</label>  
							<div class="col-md-2">
								<input id="nome" type="text" name="nome" value="<?=$pessoavirtual["nome"]?>" size="20" class="form-control input-md">							
							</div>
							
							<label class="col-md-1 control-label" for="Nome">Sobrenome</label>  
							<div class="col-md-2">
								<input id="sobrenome"type="text" name="sobrenome" value="<?=$pessoavirtual["sobrenome"]?>" size="20" class="form-control input-md">
							</div>
							
							<label class="col-md-1 control-label" for="Nome">Tipo da pessoa</label>  
							<div class="col-md-2">
								<input id="tipoPessoa" name="tipoPessoa" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["tipoPessoa"]?>">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-md-2 control-label" for="prependedtext">Telefone</label>
							<div class="col-md-2">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"OnKeyPress="formatar('## #####-####', this)" value="<?=$pessoavirtual["telefone"]?>">
								</div>
							</div>
							
							<label class="col-md-1 control-label" for="prependedtext">Celular</label>
							<div class="col-md-2">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input id="celular" name="celular" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
									OnKeyPress="formatar('## #####-####', this)" value="<?=$pessoavirtual["celular"]?>">
								</div>
							</div>
						</div> 
						
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">Cpf</label>  
							<div class="col-md-2">
								<input id="documento" name="documento" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["documento"]?>">
							</div>
							
							<label class="col-md-1 control-label" for="Nome">Nascimento</label>  
							<div class="col-md-2">
								<input id="nascimento" name="nascimento" class="form-control input-md" required="" type="date" value="<?=$pessoavirtual["nascimento"]?>">
							</div>
												
							<label class="col-md-1 control-label" for="Nome">Sexo</label>  
							<div class="col-md-2">
								<input id="sexo" name="sexo" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["sexo"]?>">
							</div>																					
						</div>
						
						
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">CEP </label>  
							<div class="col-md-2">
								<input id="cep" name="cep" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["cep"]?>">
							</div>												
							
							<label class="col-md-1 control-label" for="Nome">Rua </label>  
							<div class="col-md-2">
								<input id="rua" name="rua" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["rua"]?>">															
								
							</div>
													
							
							<label class="col-md-1 control-label" for="Nome">Nº	</label>  
							<div class="col-md-2">
								<input id="numero" name="numero" class="form-control input-md" required="" type="text" type="text" value="<?=$pessoavirtual["numero"]?>">			
							</div>

						</div>
										
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">Complemento </label>  
							<div class="col-md-2">
								<input id="complemento" name="complemento" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["complemento"]?>">
							</div>
							
							<label class="col-md-1 control-label" for="Nome">Referência</label>  
							<div class="col-md-2">
								<input id="referencia" name="referencia" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["referencia"]?>">								
							</div>
							
							
							<label class="col-md-1 control-label" for="Nome">Bairro	</label>  
							<div class="col-md-2">
								<input id="bairro" name="bairro" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["bairro"]?>">								
							</div>
						</div>
										
									
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">Cidade</label>  
							<div class="col-md-2">
								<input id="cidade" name="cidade" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["cidade"]?>">
							</div>
							
							
							<label class="col-md-1 control-label" for="Nome">Estado </label>  
							<div class="col-md-2">
								<input id="estado" name="estado" class="form-control input-md" required="" type="text" value="<?=$pessoavirtual["estado"]?>">
								
							</div>
						</div>
								
							<div class="form-group">
							<label class="col-md-2 control-label" for="Cadastrar"></label>
							<div class="col-md-8">
							<input type="hidden" name="acao" value="inserir"/>
							
							<input type="hidden" name="acao" value="alterar"/>
							<input type="hidden" name="id" value="<?=$pessoavirtual["id"]?>"/>
							<button type="button" value="Voltar" onClick="history.go(-1)" class="btn btn-info m-r-1em">Voltar</button>	
							<button type="submit" name="Enviar" value="Editar" class="btn btn-danger">Editar</button>	
							
							</div>
						</div>
						
					</div>
				</div>
				
				
			</fieldset>
		</form>
		
		
		
		
	</body>
</html>
