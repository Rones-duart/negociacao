

<html>

<head>
<title>Cadastrando Mercadorias</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel= "stylesheet" type="text/css" href="css/mysyle.css"/>

	<?php
		//chama o arquivo de conexão
		include "conectar.php"
	?>
	
</head>

<body>
	<div id= "confirmacao">

		<?php
			// recebe os dados do formulario e armazena os valores em variaveis
			
			$cod_mercad = $_POST['cod_mercad'];
			$nome_mercadoria = $_POST['nome_mercadoria'];
			$tipo_mercadoria = $_POST['tipo_mercadoria'];
			$quantidade = $_POST['quantidade'];
			$preco = $_POST['preco'];
				
			
			// verifica se todos os campos foram preenchidos
			if($cod_mercad == ""||$cod_mercad== null){
				echo"<script language='javascript' type='text/javascript'>alert('Insira o código da mercadoria');window.location.href='inserir.php';</script>";
			}

			if($nome_mercadoria == ""||$nome_mercadoria== null){
				echo"<script language='javascript' type='text/javascript'>alert('Insira o nome da mercadoria');window.location.href='inserir.php.php';</script>";
			}
			if($tipo_mercadoria == ""||$tipo_mercadoria== null){
				echo"<script language='javascript' type='text/javascript'>alert('Insira o tipo da mercadoria');window.location.href='inserir.php.php';</script>";
			}

			if($quantidade == ""||$quantidade == null){
				echo"<script language='javascript' type='text/javascript'>alert('Insira o quantidade de mercadoria');window.location.href='inserir.php.php';</script>";
			}

			if($preco == ""||$preco == null){
				echo"<script language='javascript' type='text/javascript'>alert('Insira o preco da mercadoria');window.location.href='inserir.php.php';</script>";
			}else{
				
				// ação responsável por amarzenas dados na base de dados
				$sql = mysql_query("INSERT INTO mercadorias ( cod_mercadoria, nome_mercadoria, tipo_mercadoria, quantidade, preco_mercadoria,)
				VALUES('$cod_mercad', '$nome_mercadoria', '$tipo_mercadoria', '$quantidade', '$preco')");
				
			}

			//função responsavel por retornar alerta de confirmacao de cadastro ao usuário
				echo ("<script language='javascript' type='text/javascript'>alert('Cadastro efetuado com sucesso!');window.location.href='index.php';</script>");

		?>

		
	</div>
</body>

</html>
