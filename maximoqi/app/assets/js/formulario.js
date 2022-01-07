var formulario = document.formularioMatricula ;
	
// função que esconde os elementos da tabela	
window.onload = function(){
		
	formulario.aluno.classList.add("sumir");
	formulario.responsavel.classList.add("sumir");
	formulario.documentos.classList.add("sumir");
	formulario.dadosEndereco.classList.add("sumir");
	document.getElementById("semJS").style.display="none";
	document.getElementById("semJS1").style.display="none";
};
// função de sinalização de erro
	function validacaoTexto(identificacao, numero){
				
		if(document.getElementById(identificacao).value.length < numero){
			document.getElementById(identificacao).style.border="2px solid red";
		
			
			return false;
		}
		else{
			document.getElementById(identificacao).style.border="2px solid green";
			return true;
			
		}
	};
	// função de validação de Email
	function validacaoEmail(field) { 
		usuario = field.value.substring(0, field.value.indexOf("@")); 
		dominio = field.value.substring(field.value.indexOf("@")+ 1, field.value.length); 
		
		if ((usuario.length >=1) && (dominio.length >=3) && (usuario.search("@")==-1) && (dominio.search("@")==-1) && (usuario.search(" ")==-1) && (dominio.search(" ")==-1) && (dominio.search(".")!=-1) && (dominio.indexOf(".") >=1)&& (dominio.lastIndexOf(".") < dominio.length - 1)) { 
			field.style.border="2px solid green";
			return true;
		} 
		else{ 
			field.style.border="2px solid red";
			return false;
		} 
	};
// função de validação dos campos de radio

//botão de voltar 
function voltar(volte){
	elemento = document.querySelector(volte)
	
	elemento.previousElementSibling.classList.remove("sumir");
	elemento.classList.add("sumir");
};

// caculadora de idade 
	
function calculaIdade(dataNasc){ 
	var dataAtual = new Date();
	var mesAtual = dataAtual.getMonth() + 1; 
	var anoAtual = dataAtual.getFullYear();
	
	var anoNascParts = dataNasc.split('-');
	var diaNasc =anoNascParts[2];
	var mesNasc =anoNascParts[1];
	var anoNasc =anoNascParts[0];
	var idade = anoAtual - anoNasc;

	//se mês atual for menor que o nascimento, nao fez aniversario ainda; (26/10/2009) 
	if(mesAtual < mesNasc){
		idade--; 
	}
	else {
		//se estiver no mes do nasc, verificar o dia
		if(mesAtual == mesNasc){ 
			if(dataAtual.getDate() < diaNasc ){ 
				//se a data atual for menor que o dia de nascimento ele ainda nao fez aniversario
				idade--; 
			}
		}
	} 
		return idade; 
}

// funções da fieldset de turma 	
function formTurma(){
	if(formulario.handle.value !=""){
		alert("deu merda");
		return false;
	}
	else{
		if(formulario.curso.value ==""){
			alert("Selecione o curso");
			formulario.curso.focus();
			return false;
		}
		else if(formulario.turno.value ==""){
			alert("preencha o turno");
			formulario.turno.focus();
			return false;
		}
		else{
			formulario.aluno.classList.remove("sumir");
			formulario.turma.classList.add("sumir");
			return true;
		};
	};
};

	function selecionarTurma(){
		var turno = document.getElementById("turno").options;
		for ( var i = 1 ; i < turno.length ; i ++)  { 
			turno[i].disabled =  true ; 
			document.getElementById("turnoVazio").selected=true;
			
		};
		

	 if(document.getElementById("preTecnico").selected==true){
		turno.sabadoManha.disabled = false;
	}
	else if(document.getElementById("preVestibular").selected==true){
		turno.noite.disabled = false;
		
	}
	else if(document.getElementById("portugues").selected==true){
		turno.noite.disabled = false;
	}
	else if(document.getElementById("reforco").selected==true){
		turno.manha.disabled = false;
		turno.tarde.disabled = false;
	}
	else if(document.getElementById("aulaParticular").selected==true){
		for ( var i = 1 ; i < turno.length ; i ++)  { 
			turno[i].disabled =  false ; 
		};
	}
	else if(document.getElementById("teologia").selected==true){
		turno.noite.disabled = false;
	}
	else if(document.getElementById("ingles").selected==true){
		turno.noite.disabled = false;
		turno.sabadoTarde.disabled = false;
	}
	else if(document.getElementById("prezinho").selected==true){
		turno.sabadoManha.disabled = false;
	}
	else if(document.getElementById("ibge").selected==true){
		turno.noite.disabled = false;
	}
	else if(document.getElementById("inss").selected==true){
		turno.sabadoIntegral.disabled = false;
	}
	
};
	
	//função da fieldset de aluno 
function formAluno(){
	var x = document.createElement("p");
	var y = document.createTextNode("o campos em vermelho estão incorretos");
	x.appendChild(y);
	
	//Validação dos campos 
	if(validacaoTexto("nome", 3)== false){
		alert("Digite um nome valido");
		formulario.nome.focus();
		return false;
			
	}
	else if(validacaoTexto("sobrenome", 3)== false){
		alert("Digite um sobrenome valido");
		formulario.sobrenome.focus();
		return false;
	}
	else if(validacaoEmail(formulario.emailAluno)== false){
		alert("o Email não foi preenchido corretamente");
		formulario.emailAluno.focus();
		return false;
	}
	else if(formulario.confemailAluno.value == ""){
		alert("confirme o e-Mail");
		formulario.confemailAluno.focus();
		return false;
	}
	else if(formulario.confemailAluno.value != formulario.emailAluno.value ){
		alert("Emal e confirmação não conferem");
		formulario.confemailAluno.focus();
		return false;
	}			
	else if(formulario.nascimentoAluno.value == ""){
		alert("Coloque a data de nascimento");
		formulario.nascimentoAluno.focus();
		return false;
	}
			
	else if(formulario.sexoAluno.value == ""){
		alert("Defina seu sexo");
		formulario.sexoAluno.focus();
	}
	
	else if (calculaIdade(formulario.nascimentoAluno.value) < 18){
		formulario.responsavel.classList.remove("sumir");
		formulario.aluno.classList.add("sumir");
		formulario.responsavel.style.display ='block';
		return true;
	}
	else {
		formulario.documentos.classList.remove("sumir");
		formulario.aluno.classList.add("sumir");
		formulario.responsavel.style.display ='none';
		return true;
	};
		
	
};

//Validação de fiedset responsavel
function formResponsavel(){
	if (validacaoTexto("nomeResponsavel", 3)== false){
		alert("Digite um nome de responsavel valido");
		formulario.nomeResponsavel.focus();
		return false;
	}
	else if (validacaoTexto("sobrenomeResponsavel", 3)== false){
		alert("Digite um sobrenome de responsavel valido");
		formulario.sobrenomeResponsavel.focus();
		return false;
	}
	else if (formulario.relacao.value == ""){
		alert("Insira a relação do responsavel");
		formulario.relacao.focus();
		return false;
	}
	else if (validacaoEmail(formulario.emailResponsavel)== false){
		alert("Insira o Email do responsável");
		formulario.emailResponsavel.focus();
		return false;
	}
	else if (formulario.nascimentoResponsavel.value == ""){
		alert("Insira o nascimento do responsável");
		formulario.nascimentoResponsavel.focus();
		return false;
	}
	else if (calculaIdade(formulario.nascimentoResponsavel.value) < 18){
		alert("o responsavel não pode ser menor de idade");
		return false;
	}
	else if(formulario.sexoResponsavel.value == ""){
		alert("Defina seu sexo");
		formulario.sexoAluno.focus();
	}
	else {
		formulario.documentos.classList.remove("sumir");
		formulario.responsavel.classList.add("sumir");
		document.getElementById("semJS1").style.display="block";
		return true;
	};
};

//Validação de fiedset documentação

function formDocumentos(){
	if(validacaoTexto("profissao", 4)== false ){
		alert("Insira a profissão");
		formulario.profissao.focus();
		return false;
	}
	else if(validacaoTexto("cpf", 11)== false){
		alert("Insira o cpf");
		formulario.cpf.focus();
		return false;
	}
	else if(formulario.id_estados.value ==""){
		alert("Insira o estado de nascimento");
		formulario.id_estados.focus();
		return false;
	}
	else if(formulario.estadoCivil.value ==""){
		alert("Insira o estado cívil");
		formulario.estadoCivil.focus();
		return false;
	}
	else{
		formulario.dadosEndereco.classList.remove("sumir");
		formulario.documentos.classList.add("sumir");
		return true;
	};
};

function voltarDoc(){
	if(calculaIdade(formulario.nascimentoAluno.value) < 18){
		formulario.responsavel.classList.remove("sumir");
		formulario.documentos.classList.add("sumir");
		
	}
	else{
		formulario.aluno.classList.remove("sumir");
		formulario.documentos.classList.add("sumir");
		
	};
}

//Validação de fiedset Dados de endereço 

function formEndereco(){
	if(validacaoTexto("tel1", 10)== false && (validacaoTexto("tel2", 10)== false && validacaoTexto("tel2", 11)== false)){
		alert("um dos campos de telefone deve ser preenchido");
		formulario.tel1.focus();
		return false;
		
	}
	else if(validacaoTexto("endereco", 7)== false){
		alert("Preencha o endereço corretamente");
		formulario.endereco.focus();
		return false;
	}
	else if(validacaoTexto("bairro", 4)== false){
		alert("Preencha o bairro");
		formulario.bairro.focus();
		return false;
	}
	
	else{
		return true;
	};
};


