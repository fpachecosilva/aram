<!DOCTYPE HTML>
<html>
	<head>
	<?php 
		include 'assets/config.php';
 
		$tituloPagina = 'Home - '. $empresa;
	?>
<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>
	</head>
	<body class="Home">
		<?php include 'assets/header.php'; ?>

			<section id="PrimeiroScroll" class="fullscreen-bg" style="background-image: url('<? echo $images ?>AramCapital_DeckImagem01.jpg');">

				<article>
					<div class="Navegador">
						<li class="NavAtual"></li>
						<li></li>
						<li></li>
						<li></li>
					</div>

					<h1>Somos movidos pelo desafio de reinventar relações</h1>

					<div id="SliderHome">
						<div>De transparência</div>
						<div>De mensagem 1</div>
						<div>De mensagem 2</div>
					</div>
					
				</article>
			</section>

			<section id="SegundoScroll">
				<img src="<? echo $images ?>Grafismo01.svg" class="Detalhe" />
				<article>
					<div class="Navegador">
						<li></li>
						<li class="NavAtual"></li>
						<li></li>
						<li></li>
					</div>

					<div class="ConteudoHome">
						<h2>Somos uma gestora de patrimônios com envolvimento.</h2>
						<h3>Resultado e inteligência alinhados com seus objetivos.</h3>
						<p>Entendemos do mercado e dos nossos clientes, sempre ligados no novo sem esquecer das experiências que nos trouxeram até aqui.
						<br /><br />
						Um time multidisciplinar ao seu lado, para cuidar de seu capital e ir além:</p>
						<ul>
							<li>Gestão holística de seu patrimônio financeiro, no Brasil e exterior;</li>
							<li>Assessoria nas áreas tributária, sucessória e de proteção patrimonial;</li>
							<li>Planejamento corporativo e real estate, guiando sua tomada de decisão;</li>
							<li>Controller financeiro: Controle e execução operacional para viabilizar alocações e movimentações;</li>
							<li>Gestão de risco: administração de riscos do patrimônio e da vida do cliente;</li>
							<li>Cliente experience: preparação de herdeiros, investimentos de impacto e eventos de mercado;</li>
							<li>Análise constante do mercado, alinhado com seu perfil e objetivos</li>
						</ul>
					</div>
					
				</article>
			</section>

			<section id="TerceiroScroll">
				<img src="<? echo $images ?>Grafismo02.svg" class="Detalhe" />
				<article>
					<div class="Navegador">
						<li></li>
						<li></li>
						<li class="NavAtual"></li>
						<li></li>
					</div>

					<div class="ConteudoHome">
						<h2>Porque retorno é fundamental.<br />E confiança também.</h2>
						<a href="<? echo $Expertises ?>" class="Btn">Conheça nossas expertises</a>
					</div>
					
				</article>
			</section>

			<section id="FinalProximaPagina" class="Bege">
				<article>
					<div class="Navegador">
						<li></li>
						<li></li>
						<li></li>
						<li class="NavAtual"></li>
					</div>

					<h3>Vamos conversar?</h3>
					<p>Fale com a gente. Nosso time especializado está pronto para entender, assessorar e transformar seus objetivos em segurança e futuro.</p>

					<a href="<? echo $Contato ?>" class="Btn">Contato</a>
					
				</article>
				<img src="<? echo $images ?>Grafismo06.svg" class="Detalhe" />
			</section>
	
		<?php include 'assets/footer.php'; ?>

		<script type="text/javascript">
			$('.LinkMenu:eq(0)').addClass('SessaoAtual');
			
		</script>
	</body>
</html>