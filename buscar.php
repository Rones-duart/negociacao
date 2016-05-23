
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Buscar Mercadoria</title>
		<link rel= "stylesheet" type="text/css" href="css/mystyle.css"/>
		<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
		
		<?php
			//chama o arquivo de conexão
			include "conectar.php"
		?>
	</head>
	
	<body>
		<div id="topo">
			
			<center><form method="post" action="buscar.php">
				
				<input id="nome" class="txt bradius" type="text" name="nome" value=""   />
				<input type="submit" class= "sb bradius" value="Buscar Mercadorias" />
			</form/center>			
			
		</div>
		<div  id= "tabela">		
			<center><table border=1>
			<tr ><td><b><center>Id</center></b></td> <td><b><center>codigo</center></b> </td> <td><b><center>mercadoria</center></b></td> <td><b><center>tipo</center></b></td> <td><b><center>quantidade</center></b></td> <td><b><center>preço unitario</center></b></td></tr> 
										
			<?php
						
				$nome = $_POST['nome'];
							
				if($nome == ""||$nome == null){
					echo"<script language='javascript' type='text/javascript'>alert('Por favor digite o nome de uma mercadoria!');window.location.href='visualizar.php';</script>";
				}else {
						
					$sql = mysql_query("SELECT * FROM mercadorias WHERE nome_mercadoria LIKE '%".$nome."%'");
					$row = mysql_num_rows($sql);
					if($row > 0){
								
						while ($linha = mysql_fetch_array($sql)){
							$id = $linha['id_mercadoria'];
							$cod= $linha['cod_mercadoria'];
							$nome= $linha['nome_mercadoria'];
							$tipo= $linha['tipo_mercadoria'];
							$quantidade = $linha['quantidade'];
							$preco = $linha['preco_mercadoria'];
									
							echo"<tr><td><center> $id </center></td><td><center>$cod</center></td><td><center> $nome</center></td><td> <center>$tipo</center></td> <td> <center>$quantidade</center></td> <td> <center>$preco</center></td></tr>";
						}
					}else {
						echo "Desculpa, esta mercadoria não foi encontrada em nossa cadastro!";
					}
				}
			?>
			</table>
						
		</div>
	</body>
</html>
