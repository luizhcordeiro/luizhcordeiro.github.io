<link href="app/assets/css/formularioMatricula.css" rel="stylesheet" type="text/css">
		
<div id="matriculaok">
	<h2> Cadastro realizado com sucesso</h2>
	<p> Sua ficha de Matrícula foi enviada com sucesso!</p>
	<br />
	<p> Agora resta apenas realizar o pagamento da taxa de matrícula no botão a seguir:
		<form action="https://pagseguro.uol.com.br/checkout/v2/cart.html?action=add" method="post" onsubmit="PagSeguroLightbox(this); return false;">
		<!-- NÃO EDITE OS COMANDOS DAS LINHAS ABAIXO -->
			<input type="hidden" name="itemCode" value="B40A90F09696E33334FC2F9FD0DC25AB" />
			<input type="image" src="https://p.simg.uol.com.br/out/pagseguro/i/botoes/pagamentos/205x30-pagar-azul.gif" name="submit" alt="Pague com PagSeguro - é rápido, grátis e seguro!" />
		</form>

		<script type="text/javascript" src="https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.lightbox.js"></script>
	</p>
</div>
		