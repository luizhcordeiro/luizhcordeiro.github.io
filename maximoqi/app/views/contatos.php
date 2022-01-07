
<link href="app/assets/css/formularioMatricula.css" rel="stylesheet" type="text/css">
<link href="app/assets/css/contatos.css" rel="stylesheet" type="text/css">

<section id="mapa">
	<iframe id="mapagoogle" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3675.7467717419067!2d-43.583650999999996!3d-22.885811!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9be39435d5d0f9%3A0x70675c24d79a172b!2sM%C3%A1ximo+Qi.+Preparat%C3%B3rios!5e0!3m2!1spt-BR!2sbr!4v1423334937529" frameborder="0" style="border:0">
	</iframe>
</section>
<h2>Contatos</h2>
<section class="contatos">
	
	<form id="formularioMatricula" name="Fale-Conosco" class="faleconosco" method="post" action="http://www18.locaweb.com.br/scripts/FormMail.pl">
		
		<INPUT TYPE=HIDDEN NAME="recipient" VALUE="duvidas@maximoqi.com.br">
		<input type="hidden" name="email" value="duvidas@maximoqi.com.br"/>
		
		<fieldset><legend><h3> Envie sua mensagem:</h3></legend>
			<label for="usuario">Nome:</label>
			<input type="text" name="usuario" size="30">
	
			<label for="email">E-mail: *</label>
			<input type="email" name="replyto" size="30" required>
	
			<label for="assunto">Assunto:</label><br> 
			<select name="subject">
			<option value=""></option>
				<option value="duvidas">Dúvidas</option>
				<option value="sugestoes">Sugestões</option>
				<option value="orcamento">Orçamento</option>
			</select>
	
			<label for="mensagem" id="mensagem">Mensagem: *</label><br>
			<textarea name="mensagem" rows="10" cols="50" required></textarea>
	
			<button type="submit">Enviar Mensagem</button>
		</fieldset>
	</form>
</section>
<section class="contatos">
	<div class="linha">
	<h3> Telefones:</h3>
		<p>(21)0000-0000</p>
		<p>(21)00000-0000 <img src="app/assets/img/whatsapp.png" /></p>
	</div>
	<div class="linha">
	<h3>Redes sociais:</h3>
		<a href="https://www.facebook.com/maximoqi" target="_blank"><img src="app/assets/img/Facebook-m.png"></a>
		<a href="https://www.linkedin.com/company/m%C3%A1ximo-qi" target="_blank"><img src="app/assets/img/linkedin-m.png"></a>
		<a href="https://twitter.com/cursosmaximoqi" target="_blank"><img src="app/assets/img/twitter-m.png"></a>
		<a href="https://www.youtube.com/channel/UCitJSKBoD1Zk3tmwhkQPaeA" target="_blank"><img src="app/assets/img/youtube-m.png"></a>
		<a href="https://plus.google.com/118332567317240989431" target="_blank"><img src="app/assets/img/google-plus-m.png"></a>
		<div class="moveis">
			<a href="href=whatsapp://send?text=Nosso%20Whatsapp%20é:(21)98127-3958" target="_blank"><img src="app/assets/img/whatsapp-m.png"></a>
			<a href="https://www.instagram.com/maximoqi/" target="_blank"><img src="app/assets/img/instagram-m.png"></a>
		</div>
	</div>
</section>

        