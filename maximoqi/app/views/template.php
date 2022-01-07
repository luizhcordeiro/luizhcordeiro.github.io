<!doctype html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable = no, initial-scale=1">
        <meta property="fb:app_id" content="1538168689844858" />
        
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

        <link rel="shortcut icon" href="app/assets/img/maximoqi.ico" />
		<link href="app/assets/css/estilo.css" rel="stylesheet" type="text/css">
	
		<title> (porfólio) Máximo Qi. | <?php echo $title; ?></title>
		
	</head>
	<body>
		<div id="demo">
			<p>Meramente Ilustrativo</p>
		</div>
    <div class="geral">
		<header>
			<section id="logo">
				<img src="app/assets/img/logo.png" alt="Máximo QI.- preparatórios" title="Máximo Qi.">
			</section>
			<section id="menu-soc">
				<div id="menusuperior">
					<ul>
						<!-- <li><a href="./login">Login | </a></li> -->
						<li><a href="./quemSomos"> Quem Somos | </a></li>
						<li><a href="./curriculo"> Trabalhe Conosco </a></li>
						
					</ul>
				</div>
				<div id="soc-topo">
					<a href="https://www.facebook.com/#" target="_blank"><img src="app/assets/img/facebook.png"></a>
					<a href="https://twitter.com/#" target="_blank"><img src="app/assets/img/twitter.png"></a>
					<a href="https://plus.google.com/#" target="_blank"><img src="app/assets/img/google-plus.png"></a>
					<span class="moveis">
						<a href="whatsapp://send?text=Nosso%20Whatsapp%20é:(21)98127-3958" target="_blank"><img src="app/assets/img/whatsapp.png"></a>
						<a href="https://www.instagram.com/#/" target="_blank"><img src="app/assets/img/instagram.png"></a>
					</span>
					<a href="https://www.youtube.com/channel/#" target="_blank"><img src="app/assets/img/youtube.png"></a>
					<a href="https://www.linkedin.com/company/#" target="_blank"><img src="app/assets/img/linkedin.png"></a>
				</div>
			</section>

		</header>
		
		<nav > 
        	<ul id="menuRes" ><li><h3 ><span class="seta-baixo">Menu </span></h3>
			<ul id="menu">
				<li><a href="./home"> Home</a></li>
				<li ><a href="cursos">Cursos </a><span class="seta-baixo"></span>
					<ul class="submenu">
						<li><a href="">Concursos </a><span></span> 
							<ul class="submenu2">
                            	<li><a href="#">Concurso 1</a></li>
								<li><a href="#">Concurso 2</a></li>
							</ul>
						</li> 
						<li><a href="">Reforço escolar </a><span></span>
                        	<ul class="submenu2">
								<li><a href="#">Reforço diário </a></li>
								<li><a href="#">Aula particular</a></li>
						   	</ul>
                        </li> 
						<li><a href="">Profissionalizantes </a><span></span>
                        	<ul class="submenu2" id="subProf">
								<li><a href="#">Reforço diário </a></li>
								<li><a href="#">Aula particular</a></li>
						   	</ul>
                        </li> 
					</ul>
				</li>
				<!--<li><a href="./matricula"> Matrículas</a></li>-->
                <li><a href="./contatos"> Contatos</a></li>
				<li><a href="./blog"> Blog</a></li>
			</ul>
            </li></ul>
			<aside id="login-nav">
				<form action="login" method="post">
					<input type="mailto" id="login" placeholder="email">
					<input type="password" id="senha" placeholder="senha">
					<button type="submit">OK</button>
				</form>
            	
			</aside>
		</nav>
		
		<main>
			<?php require $url;?>
		</main>
		
		<footer>
        	<section class="bordas">
        		<ul>
					<li><a href="./home">Home</a> |</li>
					<li><a href="./cursos">Cursos</a> |</li>
					<!--<li><a href="./matricula">Matrículas</a> |</li>-->
                    <li><a href="./contatos">Contatos</a> |</li>
					<li><a href="./blog">Blog</a></li>
				</ul>
        	</section>
        	<section id="rodapeLogo"></section>
        	<section id="rodapeApoio"></section>
            <section id="rodapecontato">
            	<div>
				  	<p><a href="https://www.google.com.br/maps/place/M%C3%A1ximo+Qi.+Preparat%C3%B3rios/@-22.885811,-43.583651,17z/data=!3m1!4b1!4m2!3m1!1s0x9be39435d5d0f9:0x70675c24d79a172b" target="_blank"> Rua Ocaimã - Rio de Janeiro/RJ
					</a></p>
					<p>(21)0000-0000 | (21)00000-0000</p>
				</div>
                <div>
					<a href="https://www.facebook.com/#" target="_blank"><img src="app/assets/img/facebook.png"></a>
					<a href="https://www.linkedin.com/company/#" target="_blank"><img src="app/assets/img/linkedin.png"></a>
					<a href="https://twitter.com/#" target="_blank"><img src="app/assets/img/twitter.png"></a>
					<a href="https://www.youtube.com/channel/#" target="_blank"><img src="app/assets/img/youtube.png"></a>
					<a href="https://plus.google.com/#" target="_blank"><img src="app/assets/img/google-plus.png"></a>
					<span class="moveis">
						<a href="whatsapp://send?text=Nosso%20Whatsapp%20é:(21)98127-3958" target="_blank"><img src="app/assets/img/whatsapp.png"></a>
						<a href="https://www.instagram.com/#/" target="_blank"><img src="app/assets/img/instagram.png"></a>
					</span>
				</div>
            </section>
            <section id="inferior">
            	Copyright 2015. Todos os direitos reservados à Máximo QI | Desenvolvido por <a>LUIZ H.CORDEIRO</a></section>
            </section>
        </footer>
    </div>
	<script type="text/javascript" src="app/assets/js/principal.js"></script>
   <script src="app/assets/js/jquery.bxslider.min.js"></script>
	</body>
</html>
