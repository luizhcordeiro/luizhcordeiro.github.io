
<form name="trabalhe-conosco" method="post" action="http://www18.locaweb.com.br/scripts/FormMail.pl"> 
	<h2> Trabalhe Conosco</h2>
		<h3> insira suas informações e estaremos entrando em contato em breve</h3> 

	<INPUT TYPE=HIDDEN NAME="recipient" VALUE="rh@maximoqi.com.br">
	<input type="hidden" name="email" value="rh@maximoqi.com.br"/>
	<input type=HIDDEN name="subject" value="currículo">


	<fieldset><legend> Seu currículun Vitae aqui</legend>
	<label for="curriculo">Anexe seu curriculo: </label>
	<input type="file" name="arquivo" required>
</fieldset>

<fieldset><legend>Informações Pessoais</legend>
<table cellspacing="10">
	<tr>
		<td><label for="nome">Nome: </label></td>
		<td align="left"><input type="text" name="nome" required></td>
		
		<td><label for="sobrenome">Sobrenome: </label></td>
		<td align="left"><input type="text" name="sobrenome" required></td>
	</tr>
	<tr>
		<td><label for="nascimento">Nascimento: </label></td>

		<td align="left">
			<input type="date" name="nascimento" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" max="2014-01-01">
		</td>
		
		<td> <label for="sexo"> Sexo: </label></td>
		<td>
			<label><input type="radio" name="Sexo:" value="homem" id="Sexo:_0">Masculino</label>
			<label><input type="radio" name="Sexo:" value="mulher" id="Sexo:_1">feminino</label>
			<label> <input type="radio" name="Sexo:" value="homosexual" id="Sexo:_2">outros</label>
	   </td>
	</tr>
</table>   
</fieldset>

<fieldset><legend>Informações de Contato</legend>
	<table cellspacing="10">
		<tr>
			<td><label for="telefone">Telefone: </label></td>
			<td align="left"><input type="tel" name="telefone" ></td>	

			<td><label for="celular">Celular: </label></td>
			<td align="left"><input type="tel" name="celular"></td>
			<label for="email">E-mail*:</label><br>
	<input type="email" name="email" size="30" required><br>
		</tr>
	 </table>   
		
		<p><label><b>Endereço:</b></label></p>
	   
			<p><label for="rua">Rua:</label>
			<input type="text" name="rua" size="45">
			
			<label for="número">Nº</label>
			<input  type="text"name="número" size="10"></p>
			
			<label for="bairro"> Bairro: </label>
			<input type="text" name="bairro" size="25">
			
			<label for="cidade">Cidade</label>
			<input type="text" name="cidade" size="25">
 </fieldset>  

<fieldset><legend>Interesses e disponibilidades</legend>
	
	<table cellspacing="10">
	  <label for="interesse">Em Quais aréas deseja trabalhar?</label>
	  <tr>
		<td><label>
		  <input type="checkbox" name="Interesse" value="pré-tecnico" id="Interesse_0">
		  Prof. Pré-tecnico</label></td>
		<td><label>
		  <input type="checkbox" name="Interesse" value="pré-vestibular" id="Interesse_1">
		  Prof. Pré-vestibular</label></td>
		<td><label>
		  <input type="checkbox" name="Interesse" value="Concursos" id="Interesse_2">
		  Prof. Concursos públicos</label></td>
	  </tr>   
	  <tr>
		<td><label>
		  <input type="checkbox" name="Interesse" value="semipresencial" id="Interesse_3">
		  Prof. Cursos Semiprenciais</label></td>
	
		<td><label>
		  <input type="checkbox" name="Interesse" value="a distancia" id="Interesse_4">
		  Prof. de Educação  a Distancia</label></td>
	
		<td><label>
		  <input type="checkbox" name="Interesse" value="reforço" id="Interesse_13">
		  Prof. Reforço Escolar</label></td>  
	</tr>
	  <tr> </tr> 
	  <tr>
		<td><label>
		  <input type="checkbox" name="Interesse" value="residencial" id="Interesse_5">
		  Tutor domiciliar</label></td>
		<td><label>
		  <input type="checkbox" name="Interesse" value="telefone" id="Interesse_6">
		  Tutor por telefone</label></td>
		<td><label>
		  <input type="checkbox" name="Interesse" value="online" id="Interesse_7">
		  Tutor Online</label></td>
	  </tr>  
	  <tr>
		<td><label>
		  <input type="checkbox" name="Interesse" value="Coordenador" id="Interesse_8">
		  Coordenador de Tutoria</label></td>
		<td><label>
		  <input type="checkbox" name="Interesse" value="Material" id="Interesse_9">
		  Produtor de Material Didatico</label></td>
		<td><label>
		  <input type="checkbox" name="Interesse" value="Secretario Escolar" id="Interesse_10">
		  Técnico em Secretariado Escolar</label></td>
	  </tr>
	  <tr> </tr>
	  <tr>
		<td><label>
		  <input type="checkbox" name="Interesse" value="Panfleteiro" id="Interesse_11">
		  Entregador de panfletos</label></td>
		<td><label>
		  <input type="checkbox" name="Interesse" value="recepção" id="Interesse_12">
		  Recepcionista</label></td>
		<td><label>
		  <input type="checkbox" name="Interesse" value="revendedor" id="Interesse_13">
		  Revendor de material/cursos</label></td>
	  </tr>
	</table>  
	<pre>  </pre>
	<table cellspacing="20"><label for="horários"> Quais seus horários de disponibilidade?</label>
	   <tr>
		 <td><label>
		   <input type="checkbox" name="horários" value="seg.Manha" id="horaacuterios_0">
		   Segunda - Manhã</label></td>
	  
		 <td><label>
		   <input type="checkbox" name="horários" value="seg.Tarde" id="horaacuterios_1">
		   Segunda - tarde</label></td>
	  
		 <td><label>
		   <input type="checkbox" name="horários" value="seg.Noite" id="horaacuterios_2">
		   Segunda - noite</label></td>
	   </tr>
	   <tr>
		 <td><label>
		   <input type="checkbox" name="horários" value="ter.Manha" id="horaacuterios_3">
		   Terça - manhã</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="ter.Tarde" id="horaacuterios_4">
		   Terça - tarde</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="ter.Noite" id="horaacuterios_5">
		   Terça - noite</label></td>
	   </tr>
	   <tr>
		 <td><label>
		   <input type="checkbox" name="horários" value="quar.Manha" id="horaacuterios_6">
		   Quarta - manhã</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="quar.Tarde" id="horaacuterios_7">
		   Quarta - tarde</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="quar.Noite" id="horaacuterios_8">
		   Quarta - noite</label></td>
	   </tr>
	   <tr>
		 <td><label>
		   <input type="checkbox" name="horários" value="quin.Manhã" id="horaacuterios_9">
		   Quinta - manhã</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="quin.Tarde" id="horaacuterios_10">
		   Quinta - tarde</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="quin.Noite" id="horaacuterios_11">
		   Quinta - noite</label></td>
	   </tr>
	   <tr>
		 <td><label>
		   <input type="checkbox" name="horários" value="sex.Manha" id="horaacuterios_12">
		   Sexta - manhã</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="sex.Tarde" id="horaacuterios_13">
		   Sexta - tarde</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="sex.Noite" id="horaacuterios_14">
		   Sexta - noite</label></td>
	   </tr>
	   <tr>
		 <td><label>
		   <input type="checkbox" name="horários" value="sab.Manha" id="horaacuterios_15">
		   Sábado - manhã</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="sab.Tarde" id="horaacuterios_16">
		   Sábado - tarde</label></td>
	   
		 <td><label>
		   <input type="checkbox" name="horários" value="sab.Noite" id="horaacuterios_17">
		   Sábado - noite</label></td>
	   </tr>
</table>
	<pre>  </pre>
	<label>Pretenção Salarial R$:</label>
	<input type="tel" required maxlength="15" name="salário" pattern="([0-9]{1,3}\.)?[0-9]{1,3},[0-9]{2}$" />
</fieldset>

<fieldset><legend>Como nos conheceu </legend>
  <p> <label for="conheceu">Como ficou sabendo sobre nosso preparatório? </label><br>
	<label>
	  <input type="radio" name="conheceu" value="e-mail" id="conheceu_0">
	  E-mail Direto</label>
	<br>
	<label>
	  <input type="radio" name="conheceu" value="anuncio" id="conheceu_1">
	  Anúncios publicitários/ Outdoor</label>
	<br>
	<label>
	  <input type="radio" name="conheceu" value="google" id="conheceu_2">
	  Pesquisa Online</label>
	<br>
	<label>
	  <input type="radio" name="conheceu" value="Panfleto" id="conheceu_3">
	  Panfletos/Folder</label>
	<br>
	<label>
	  <input type="radio" name="conheceu" value="pessoa" id="conheceu_4">
	  Amigo/familiar</label>
	<br>
	<label>
	  <input type="radio" name="conheceu" value="trabalho" id="conheceu_5">
	  Colega de Trabalho</label>
	<br>
	<label>
	  <input type="radio" name="conheceu" value="Viu a Unidade" id="conheceu_6">
	  Visualização da Unidade</label>
	<br>
	<label>
	  <input type="radio" name="conheceu" value="Outro" id="conheceu_7">
	  Outros</label><input type="text" name="outro" size="12">
	<br>
  </p>
</fieldset>

<fieldset>
	<input type="submit"><input type="reset" value="Refazer">
</fieldset>

</form>	 
        	
        
     