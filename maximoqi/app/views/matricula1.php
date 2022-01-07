<link href="app/assets/css/formularioMatricula.css" rel="stylesheet" type="text/css">
<?php
	// require_once BASE_PATH . DS . "app" . DS . "services" . DS . "functions". DS . "functions.php";
?>
<h2> Ficha de Matricula</h2>
<form action="matricula1" method="post" id="formularioMatricula" name="formularioMatricula" >
	
	
	
	<fieldset id="aluno1"><legend> Dados pessoais do Aluno </legend>
		
		<label for="nome"><p>*Nome:</p> </label> 
		<input type="text" id="nome" name="nome" size="30"  placeholder="José luís" onchange="validacaoTexto('nome', 3, 'aluno')" required >
			
		<label for="email">*Email:</label> 
		<input type="email" id="email" name="email" placeholder="fulano@provedor.com" onchange="validacaoEmail(emailAluno)" required>

		<label for="senha">*Senha:</label> 
		<input type="text" id="senha" name="senha" placeholder="fulano@provedor.com" onchange="validacaoEmail(emailAluno)" required>
	
		
		<button type="submit" onclick="return formEndereco()"> Enviar </button>
		
	</fieldset>
	
</form>
