

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Cadastro de Mercadorias</title>
		<link rel= "stylesheet" type="text/css" href="css/mystyle.css"/>
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		
		<?php
			//chama o arquivo de conexão
			include "conectar.php"
		?>
	
	</head>
	
	<body>
		<div id="top" class="label"><center><b>CASDASTRE SUAS MERCADORIAS AQUI!</b></center></div>
		
		<div id="cadastro" class=" form bradius">
			<div class="acomodar">
			
				<!-- formulario de cadastro de mercadorias -->
				<form method="post" action="inserir_mercadoria.php" >
				
					<label for="cod_mercad" class="label"><strong>*Código da Mercadoria:</strong></label>
					<input id="cod_mercad" class="txt bradius" type="text" name="cod_mercad" value="" />
					
					<label for="nome_mercadoria" class="label"><strong>*Nome da Mercadoria:</strong></label>
					<input id="nome_mercadoria" class="txt bradius" type="text" name="nome_mercadoria" value="" />
					
					<label for="tipo_mercadoria"  class="label"><strong>*Tipo da Mercadoria:</strong></label>
					<select id="tipo_mercadoria" class="txt bradius" type="text" name="tipo_mercadoria" value="" />
						
						<option value=''></option>
						<?php
						//cria uma select e retorna os dados da tabela tipo 
							$sql = "select * from tipo";
							$resultado = mysql_query($sql,$conexao);
							while($dados = mysql_fetch_array($resultado)){
								$tipo = $dados["tipo_mercadoria"];
								echo "<option value='$tipo'>$tipo</option>";
							}
						?>
					</select>
					
					<label for="quantidade"  class="label"><strong>*Quantidade:</strong></label>
					<input id="quantidade" class="txt bradius" type="text" name="quantidade" value="" />
					
					<label for="preco"  class="label"><strong>*Preço:</strong></label>
					<input id="preco" class="txt bradius" type="text" name="preco" value="" />
										
					<!--chama o arquivo que vai inserir od dados na base de dados-->
					<input type="submit" class= "sb bradius" value="Cadastrar Mercadoria" />
				</form>
			</div>
		</div>
	</body>
</html>
