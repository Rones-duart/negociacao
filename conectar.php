<?php
//arquivo de conexao com a base de dados
$host = "";
$user = "";
$pass = "";
$banco = "mercadorias";
$conexao = mysql_connect($host, $user, $pass) or die(mysql_error());
mysql_select_db($banco)or die(mysql_error());
?>
