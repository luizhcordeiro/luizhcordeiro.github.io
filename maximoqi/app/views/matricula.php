<link href="app/assets/css/formularioMatricula.css" rel="stylesheet" type="text/css">

<h2> Ficha de Matricula</h2>
<form id="formularioMatricula" name="formularioMatricula" method="post" onsubmit="return validacao()" action="http://www18.locaweb.com.br/scripts/FormMail.pl">
	<INPUT TYPE=HIDDEN NAME="recipient" VALUE="matriculas@maximoqi.com.br">
	<input type="hidden" name="email" value="matriculas@maximoqi.com.br"/>
	<input type="hidden" name="subject" value="ficha de matricula">
	<input type="hidden" name="redirect" value="http://maximoqi.com.br/inscricao-ok.html" />
	
	<fieldset id="turma"><legend for="turma"> Turma pretendida </legend>
		
		<input type="hidden" name="handle" value="" />
	
		<label for="curso"> Curso </label>
		<select id="curso" name="curso" onchange="selecionarTurma()"  required >
			<option value="" id="cursoVazio"></option>
			<option value="IBGE" id="ibge"> IBGE</option>
			<option value="INSS" id="inss"> INSS</option>
			<option value="Inglês" id="ingles"> Inglês 18 meses</option>
			<option value="teologia" id="teologia"> Teologia Basico</option>
			<option value="portugues" id="portugues">Português Intr. </option>
			<option value="Reforço" id="reforco"> Reforço Diário</option>
			<option value="aula Particular" id="aulaParticular"> Aulas particulares</option>
			<option value="preTecnico" id="preTecnico">Pré-Técnico </option>
			<option value="Prezinho" id="prezinho"> Pré-5° ano</option>
			<option value="preVestibular" id="preVestibular">Pré-Vestibular</option>
			
		</select>
		
		
		<label for="turno">Turno</label>
		<select id="turno" name="turno" required>
			<option value="" id="turnoVazio"></option>
			<option id="manha" value="manha">Manhã</option>
			<option id="tarde" value="tarde">Tarde</option>
			<option id="noite" value="noite">Noite</option>
			<option id="sabadoIntegral"value="sabadoIntegral">Sábado Integral</option>
			<option id="sabadoManha"value="sabado">Sábado Manhã</option>
			<option id="sabadoTarde"value="sabadoTarde">Sábado Tarde</option>
		</select>
		
		<button type="button" onclick="return formTurma()"> Confirmar e proximo</button>
	</fieldset>

	<fieldset id="aluno"><legend> Dados pessoais do Aluno </legend>
		<div></div>
		<label for="nome"><p>*Nome:</p> </label> 
		<input type="text" id="nome" name="nome" size="30"  placeholder="José luís" onchange="validacaoTexto('nome', 3, 'aluno')" required >
		
		
		<label for="sobrenome">*Sobrenome: </label> 
		<input type="text" id="sobrenome" name="sobrenome" size="30"  placeholder="Silva da Silva" onchange="validacaoTexto('sobrenome', 3)" required>
	
		<label for="emailAluno">*Email:</label> 
		<input type="email" id="emailAluno" name="emailAluno" placeholder="fulano@provedor.com" onchange="validacaoEmail(emailAluno)" required>

		<label for="confemailAluno">*Repita E-mail:</label> 
		<input type="email" id="confemailAluno" name="confemailAluno" placeholder="fulano@provedor.com" onchange="validacaoEmail(confemailAluno)" required>

		<label for="nascimentoAluno" >*Nascimento: </label> 
		<input type="date" id="nascimentoAluno" name="nascimentoAluno" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" min="1910-01-01" max="2011-01-01" required>

		<label for="sexoAluno">Sexo:</label>  				<select id="sexoAluno">
			<option value=""></option>
			<option value="masculino">Masculino</option>
			<option value="feminino">Feminino</option>
		</select>
		<div class="resetaBotao"></div>
		<button type="button" onclick="return formAluno()"> Confirmar e proximo</button>
		<button type="button" onclick="return voltar('#aluno')"> editar dados anteriores</button>
	</fieldset> 

	<fieldset  id="responsavel"><legend> Dados do Responsável </legend>
		<div id="semJS"> Para que este formulário de Inscrição seja valido estes campos devem estar preenchidos caso o aluno seja menor de idade</div>
		<label for="nomeResponsavel">Nome: </label> 
		<input type="text" id="nomeResponsavel" name="nomeResponsavel" size="30" placeholder="José luís" onchange="validacaoTexto('nomeResponsavel', 3)">
	
		<label for="sobrenomeResponsavel">Sobrenome: </label> 
		<input type="text" id="sobrenomeResponsavel" name="sobrenomeResponsavel" size="30"  placeholder="Silva da Silva" onchange="validacaoTexto('sobrenomeResponsavel', 2)">
	
		<label for="relacao">Relação</label> 
		<select id="relacao" name="relacao">
			<option value=""></option>
			<option value="pai" >Pai </option>
			<option value="mãe" >mãe </option>
			<option value="avós">Avô(ó)</option>
			<option value="responsavel">Responsavél Legal</option>
			<option value="tios">Tio(a)</option>
			<option value="irmãos">Irmão(ã)</option>
			<option value="primos">Primo(a)</option>
		</select> 
	
		<label for="emailResponsavel">E-mail:</label> 
		<input type="email" name="emailResponsavel" id="emailResponsavel" onchange="validacaoEmail(emailResponsavel)" placeholder="fulano@provedor.com"> 
		
		<label>Nascimento: </label> 
		<input type="date" name="nascimentoResponsavel"  id="nascimentoResponsavel" pattern="[0-9]{2}\/[0-9]{2}\/[0-9]{4}$" max="1998-01-01" >
	
		<label for="sexoResponsavel">Sexo:</label>
		<select id="sexoResponsavel">
			<option value=""></option>
			<option value="masculino">Masculino</option>
			<option value="feminino">Feminino</option>
		</select>
		<div class="resetaBotao"></div>
		<button type="button" onclick="return formResponsavel()"> Confirmar e proximo</button>
		<button type="button" onclick="return voltar('#responsavel')"> editar dados anteriores</button>
	</fieldset>

	<fieldset id="documentos" ><legend for="documentos"> Documentação </legend>
		<div id="semJS1">favor preencher com os dados do responsável para alunos menores de idade</div>
		
		<label for="profissao">*Profissão</label> 
		<input type="text" id="profissao" placeholder="professor" onchange="validacaoTexto('profissao', 4)" required > 
	
		<label for="cpf">*CPF:</label> 
		<input type="number" id="cpf" name="cpf"  placeholder="888.888.888-88"  pattern="\d{9}-?\d{2}" maxlength="11" onchange="validacaoTexto('cpf', 11)" required> 

		<label for="nacionalidade">*Nacionalidade:</label>
		<select id="nacionalidade">
			<option value=""></option>
			<option value="brasileiro">Brasileiro</option>
			<option value="outra">Outra</option>
		</select>
		 
	
		<label for="naturalidade id_estados">*Naturalidade:</label>
		<select name="id_estados" id="id_estados">
			<option value=""></option>
			<option value="RJ">Rio de Janeiro</option>
			<option value="AC">Acre</option>
			<option value="AL">Alagoas</option>
			<option value="AP">Amapá</option>
			<option value="AM">Amazonas</option>
			<option value="BA">Bahia</option>
			<option value="CE">Ceará</option>
			<option value="DF">Distrito Federal</option>
			<option value="ES">Espirito Santo</option>
			<option value="GO">Goiás</option>
			<option value="MA">Maranhão</option>
			<option value="MT">Mato Grosso</option>
			<option value="MS">Mato Grosso do Sul</option>
			<option value="MG">Minas Gerais</option>
			<option value="PA">Pará</option>
			<option value="PB">Paraiba</option>
			<option value="PR">Paraná</option>
			<option value="PE">Pernambuco</option>
			<option value="PI">Piauí</option>
			<option value="RN">Rio Grande do Norte</option>
			<option value="RS">Rio Grande do Sul</option>
			<option value="RO">Rondônia</option>
			<option value="RR">Roraima</option>
			<option value="SC">Santa Catarina</option>
			<option value="SP">São Paulo</option>
			<option value="SE">Sergipe</option>
			<option value="TO">Tocantis</option>
		</select>
		<input type="text" name="naturalidade" id="naturalidade" pattern="[a-z\s]+$" placeholder="estado de nascimento"> 
 
		<label for="estadoCivil">*Estado Cívil:</label>
		<select name="estadoCivil" id="estadoCivil" required>
			<option value=""></option>
			<option value="solteiro">Solteiro</option>
			<option value="casado" >Casado</option>
			<option value="viuvo" >Viúvo</option>
			<option value="divorciado" >Divorciado</option>
		</select>
		
		<div class="resetaBotao"></div>
		<button type="button" onclick="return formDocumentos()"> Confirmar e proximo</button>
		<button type="button" onclick="return voltarDoc()"> editar dados anteriores</button>
	</fieldset>

	<fieldset id="dadosEndereco" ><legend> Informações de contato </legend>

		<label for="tel1">* Telefone fixo: </label>
		<input type="tel" name="tel1" id="tel1" placeholder="3316-9607" onchange="validacaoTexto('tel1', 10)">
	
		
		<label for="tel2"> Tel. celular: </label>
		<input type="tel" name="tel2" id="tel2" placeholder="00000-0000" onchange="validacaoTexto('tel2', 11)">
		
		<label for="cep">CEP:</label>
		<input type="number" name="cep" id="cep" placeholder="23071-430" onchange="validacaoTexto('cep', 8)">
		
		<label for="endereco">* Endereço:</label>
		<input type="text" name="endereço" id="endereco" placeholder="Rua Ocaimã 431" onchange="validacaoTexto('endereco', 7)" required>
	
		<label for="complemento">Complemento:</label>
		<input type="text" name="complemento" id="complemento"placeholder="frente">
				
		<label for="cidadeRJ">*cidade</label>
		<select name="cidadeRJ" id="cidadeRJ" required>
			<option>Rio de Janeiro</option>
			<option>Angra dos Reis</option>
			<option>Aperibe</option>
			<option>Araruama</option>
			<option>Areal</option>
			<option>Armacao de Buzios</option>
			<option>Arraial do Cabo</option>
			<option>Barra Mansa</option>
			<option>Barra do Pirai</option>
			<option>Belford Roxo</option>
			<option>Bom Jardim</option>
			<option>Bom Jesus do Itabapoana</option>
			<option>Cabo Frio</option>
			<option>Cachoeiras de Macacu</option>
			<option>Cambuci</option>
			<option>Campos dos Goytacazes</option>
			<option>Cantagalo</option>
			<option>Carapebus</option>
			<option>Cardoso Moreira</option>
			<option>Carmo</option>
			<option>Casimiro de Abreu</option>
			<option>Comendador Levy Gasparian</option>
			<option>Conceicao de Macabu</option>
			<option>Cordeiro</option>
			<option>Duas Barras</option>
			<option>Duque de Caxias</option>
			<option>Engenheiro Paulo de Frontin</option>
			<option>Guapimirim</option>
			<option>Iguaba Grande</option>
			<option>Itaborai</option>
			<option>Itaguai</option>
			<option>Italva</option>
			<option>Itaocara</option>
			<option>Itaperuna</option>
			<option>Itatiaia</option>
			<option>Japeri</option>
			<option>Laje do Muriae</option>
			<option>Macae</option>
			<option>Macuco</option>
			<option>Mage</option>
			<option>Mangaratiba</option>
			<option>Marica</option>
			<option>Mendes</option>
			<option>Miguel Pereira</option>
			<option>Miracema</option>
			<option>Natividade</option>
			<option>Nilopolis</option>
			<option>Niteroi</option>
			<option>Nova Friburgo</option>
			<option>Nova Iguacu</option>
			<option>Paracambi</option>
			<option>Paraiba do Sul</option>
			<option>Parati</option>
			<option>Paty do Alferes</option>
			<option>Petropolis</option>
			<option>Pinheiral</option>
			<option>Pirai</option>
			<option>Porciuncula</option>
			<option>Porto Real</option>
			<option>Quatis</option>
			<option>Queimados</option>
			<option>Quissama</option>
			<option>Resende</option>
			<option>Rio Bonito</option>
			<option>Rio Claro</option>
			<option>Rio das Flores</option>
			<option>Rio das Ostras</option>
			<option>Santa Maria Madalena</option>
			<option>Santo Antonio de Padua</option>
			<option>Sao Fidelis</option>
			<option>Sao Francisco de Itabapoana</option>
			<option>Sao Goncalo</option>
			<option>Sao Joao da Barra</option>
			<option>Sao Joao de Meriti</option>
			<option>Sao Jose de Uba</option>
			<option>Sao Jose do Vale do Rio Preto</option>
			<option>Sao Pedro da Aldeia</option>
			<option>Sao Sebastiao do Alto</option>
			<option>Sapucaia</option>
			<option>Saquarema</option>
			<option>Seropedica</option>
			<option>Silva Jardim</option>
			<option>Sumidouro</option>
			<option>Tangua</option>
			<option>Teresopolis</option>
			<option>Trajano de Morais</option>
			<option>Tres Rios</option>
			<option>Valenca</option>
			<option>Varre-Sai</option>
			<option>Vassouras</option>
			<option>Volta Redonda</option>
		</select>
		
		<label for="bairro">* Bairro: </label>
		<input type="text" name="bairro" id="bairro" placeholder="Campo Grande" onchange="validacaoTexto('bairro', 4)" required>
		
		<div class="resetaBotao"></div>
		<button type="submit" onclick="return formEndereco()"> Enviar </button>
		<button type="button" onclick="return voltar('#dadosEndereco')"> editar anterior</button>
		
	</fieldset>
	
</form>
<script src="app/assets/js/formulario.js"> </script>

		