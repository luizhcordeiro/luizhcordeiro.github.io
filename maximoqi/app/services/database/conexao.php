<?php
	
	
	// localhost //
	$dsn 	= "mysql:dbname=maximoQi; host=localhost";
	$user 	= "root";
	$pass	= "";
	
	// Servidor //
	//$dsn 	= "mysql:dbname=maximoQi; host=mysql.hostinger.com.br";
	//$user 	= "#";
	//$pass	= "#";

	$con = new PDO($dsn, $user, $pass);
	// Está armazenando a conexão dsn,user,pass 
	
	/*
	//TESTE DE CONEXAO !!
	
	if(!$con)
	{
		echo "Erro! <br/>";
	}
	else
	{
		// Se conectou posso fazer uma busca por dados.
		echo "Conectou!!! <br/>";	
	}
	*/
	
	

?>





