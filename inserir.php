<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->



<!DOCTYPE html>
<head>
	
	
</head>

<body>

	<form class="form-horizontal" name="dadosPessoa" method="POST" action="conexaoBancoDados.php">
		<fieldset>
			<div class="panel panel-primary">
				<div class="panel-heading">Cadastro</div>
				<div class="panel-body">
					<div class="form-group">
										
						
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">Nome</label>  
							<div class="col-md-2">
								<input id="nome" name="nome" class="form-control input-md" required="" type="text">
							</div>
							
							<label class="col-md-1 control-label" for="Nome">Sobrenome</label>  
							<div class="col-md-2">
								<input id="sobrenome" name="sobrenome" class="form-control input-md" required="" type="text">
							</div>
							
							<label class="form-group" for="radios"></label>
							<div class="col-md-4"> 
								<label required="" class="radio-inline" for="radios-0" >
									<input name="tipoPessoa" id="tipoPessoa" value="f" type="radio" required>
									Pessoa física
								</label> 
								
								<label class="radio-inline" for="radios-1">
									<input name="tipoPessoa" id="tipoPessoa" value="j" type="radio">
									Pessoa Jurídica
								</label>
							</div>
						</div>
												
						<div class="form-group">
							<label class="col-md-2 control-label" for="prependedtext">Telefone</label>
							<div class="col-md-2">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX" required="" type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"OnKeyPress="formatar('## #####-####', this)">
								</div>
							</div>
							
							<label class="col-md-1 control-label" for="prependedtext">Celular</label>
							<div class="col-md-2">
								<div class="input-group">
									<span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
									<input id="celular" name="celular" class="form-control" placeholder="XX XXXXX-XXXX" type="text" maxlength="13"  pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
									OnKeyPress="formatar('## #####-####', this)">
								</div>
							</div>
						</div> 
												
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">Cpf</label>  
							<div class="col-md-2">
								<input id="documento" name="documento" class="form-control input-md" required="" type="text">
							</div>
							
							<label class="col-md-1 control-label" for="Nome">Nascimento</label>  
							<div class="col-md-2">
								<input id="nascimento" name="nascimento" class="form-control input-md" required="" type="date">
							</div>
							
							
							<label class="form-group" for="radios"></label>
							<div class="col-md-4">
								<label required="" class="radio-inline" for="radios-0" >
									<input name="sexo" id="sexo" value="feminino" type="radio" required>
									Feminino
								</label> 
								<label class="radio-inline" for="radios-1">
									<input name="sexo" id="sexo" value="masculino" type="radio">
									Masculino
								</label>
							</div>
						</div>
																	
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">CEP </label>  
							<div class="col-md-2">
								<input id="cep" name="cep" class="form-control input-md" required="" type="text">
							</div>												
							
							<label class="col-md-1 control-label" for="Nome">Rua </label>  
							<div class="col-md-2">
								<input id="rua" name="rua" class="form-control input-md" required="" type="text">
								
							</div>
												
							<label class="col-md-1 control-label" for="Nome">Nº	</label>  
							<div class="col-md-2">
								<input id="numero" name="numero" class="form-control input-md" required="" type="text">
								
							</div>
						</div>
								
						
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">Complemento </label>  
							<div class="col-md-2">
								<input id="complemento" name="complemento" class="form-control input-md" required="" type="text">
							</div>
							
							<label class="col-md-1 control-label" for="Nome">Referência</label>  
							<div class="col-md-2">
								<input id="referencia" name="referencia" class="form-control input-md" required="" type="text">
								
							</div>
							
							
							<label class="col-md-1 control-label" for="Nome">Bairro	</label>  
							<div class="col-md-2">
								<input id="bairro" name="bairro" class="form-control input-md" required="" type="text">
								
							</div>
						</div>
						
						
						<div class="form-group">
							<label class="col-md-2 control-label" for="Nome">Cidade</label>  
							<div class="col-md-2">
								<input id="cidade" name="cidade" class="form-control input-md" required="" type="text">
							</div>

							
							<label class="col-md-1 control-label" for="Nome">Estado </label>  
							<div class="col-md-2">
								<input id="estado" name="estado" class="form-control input-md" required="" type="text">
								
							</div>
						</div>
						
						

						<!-- Button (Double) -->
						<div class="form-group">
							<label class="col-md-2 control-label" for="Cadastrar"></label>
							<div class="col-md-8">
								<input type="hidden" name="acao" value="inserir"/>
					
								<button id="Cadastrar" name="Enviar" class="btn btn-success" value="Enviar" type="submit">Enviar</button>
								<button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Limpar</button>
							</div>
						</div>
						
					</div>
				</div>
				
				
			</fieldset>
		</form>
		
	</body>
</html>