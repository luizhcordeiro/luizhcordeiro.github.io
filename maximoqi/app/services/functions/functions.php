<?php
	require_once BASE_PATH . DS . "app" . DS . "services" . DS . "database". DS . "conexao.php";
		
		$nome = isset($_POST['nome']) ? $_POST['nome'] : null;
		$email = isset($_POST['email']) ? $_POST['email'] : null;
		$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
		
		
$sql = "INSERT INTO alunos(nome, email, senha) VALUES(:nome, :email, :senha)";
$stmt = $con->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':senha', $senha);
 
 
$stmt->execute();
		
?>