<!DOCTYPE html>

<?php include("conexaoBancoDados.php");
	$grupo = selectAllPessoa();
?>
<html lang="pt-br">
	<head>  
	
		<!-- Meta tags Obrigatórias -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>APS - Lista clientes</title>
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	</head>
	
	<body>

	<nav class="navbar navbar-light" style="background-color: #e9e9e9;">
		
		<h1> Lista de clientes </h1>
		
		<ul class="nav justify-content-end">
		  <li class="nav-item"><a href="inserir.php" class='btn btn-primary m-b-1em'>Adicionar um cliente</a></li>		  
		</ul>
		
	</nav>
		
	<table class="table">
	  <thead class="thead-dark">
		<tr>
		  <th scope="col">#</th>
		  <th scope="col">Nome</th>
		  <th scope="col">Sobrenome</th>
		  <th scope="col">Sexo</th>
		  <th scope="col"></th>
		  <th scope="col"></th> 
		  <th scope="col"></th>
		</tr>
	  </thead>
	  
		  <tbody>
			<?php foreach ($grupo as $pessoavirtual){ ?>
				<tr>
					<td><?=$pessoavirtual["tipoPessoa"]?></td>
					<td><?=$pessoavirtual["nome"]?></td>
					<td><?=$pessoavirtual["sobrenome"]?></td>
					<td><?=$pessoavirtual["sexo"]?></td>
					<!--
					<td><?=$pessoavirtual["documento"]?></td>
					<td><?=$pessoavirtual["telefone"]?></td>
					<td><?=$pessoavirtual["celular"]?></td>
					<td><?=$pessoavirtual["nascimento"]?></td>
					<td><?=$pessoavirtual["cep"]?></td>
					<td><?=$pessoavirtual["rua"]?></td>
					<td><?=$pessoavirtual["numero"]?></td>
					<td><?=$pessoavirtual["complemento"]?></td>
					<td><?=$pessoavirtual["referencia"]?></td>
					<td><?=$pessoavirtual["bairro"]?></td>
					<td><?=$pessoavirtual["cidade"]?></td>
					<td><?=$pessoavirtual["estado"]?></td>
					-->				
					<td>
						<form name="visualizar" method="POST" action="visualizar.php">
								<input type="hidden" name="id" value="<?=$pessoavirtual["id"]?>" />
								<input type="submit" value="Ver" name="visualizar" class='btn btn-info m-r-1em'/>
						</form>			
					</td>
					<td>
						<form name="alterar" method="POST" action="alterar.php">
								<input type="hidden" name="id" value="<?=$pessoavirtual["id"]?>" />
								<input type="submit" value="Alterar" name="alterar" class='btn btn-primary m-r-1em'/>
						</form>			
					</td>
					
					<td>
						<form name="excluir" method="POST" action="conexaoBancoDados.php">
							<input type="hidden" name="id" value="<?=$pessoavirtual["id"]?>" />
							<input type="hidden" name="acao" value="excluir"/>	
							<input type="submit" value="Excluir" name="excluir"  class='btn btn-danger'/>
						</form>
					</td>
					
				</tr>
				<?php } ?>
				
			</tbody>
		</table>
		
		</div> <!-- end .container -->

		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		
	</body>

</html>