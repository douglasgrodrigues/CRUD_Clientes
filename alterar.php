<?php include("conexaoBancoDados.php");
	$pessoas = selectIdPessoa();
?>
	
	<form name="dadosPessoa" method="POST" action="conexaoBancoDados.php">
	    <table border="1">
			<tbody>
				<tr>
					<td> Nome </td>
					<td><input type="text" name="nome" value="<?=$pessoas["nome"]?>" size="20" /></td>
				</tr>
				
				<tr>
					<td> Nascimento </td>
					<td><input type="date" name="nascimento" value="<?=$pessoas["nascimento"]?>"/></td>
				</tr>
				
				<tr>
					<td> Telefone </td>
					<td><input type="text" name="telefone" value="<?=$pessoas["telefone"]?> "size="20"/></td>
				</tr>
				
				<tr>
					<td> Endereço </td>
					<td><input type="text" name="endereco" value="<?=$pessoas["endereco"]?>" size="20"/></td>
				</tr>
				
				<tr>
					<td><input type="hidden" name="acao" value="alterar"/>
						<input type="hidden" name="id" value="<?=$pessoas["id"]?>"/>
					</td>
					<td><input type="submit" name="Enviar" value="Editar"/></td>
				</tr>		
			</tbody>
		</table>
	</form>
