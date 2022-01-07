<?php
	require_once BASE_PATH . DS . "app" . DS . "services" . DS . "database". DS . "conexao.php";
	
		$stmt = $con->prepare("SELECT * FROM usuario WHERE login = ? AND senha = ?"); 
$stmt->bind_param(1, $_POST['login'], PDO::PARAM_STR); 
$stmt->bind_param(2, $_POST['senha'], PDO::PARAM_STR); 

// Executando statement 
$stmt->execute(); 

// Obter linha consultada 
$obj = $stmt->fetchObject(); 

// Se a linha existe: indicar que esta logado e encaminhar para outro lugar 
if ($obj) { 
$_SESSION['login'] = $_POST['login']; 
header('Location: http://outro/lugar'); 
} else { 
echo '<p class="erro">Login/Senha inv&aacute;lidos</p>'; 
} 

?>

<form action="login" method="post">
	<!--<label for="login">Login:</label>-->
	<input type="mailto" id="login" placeholder="email">
	<!--<label for="senha">Senha:</label>-->
	<input type="password" id="senha" placeholder="senha">
	<button type="submit"> Entrar </button>
</form>



