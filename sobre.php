<!DOCTYPE HTML>
<html>
	<head>
	<?php 
		include 'assets/config.php';
 
        $tituloPagina = 'Sobre - '. $empresa;
        $urlPagina = $Sobre;
	?>
<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>
	</head>
	<body class="Sobre">
        <?php include 'assets/header.php'; ?>
                
        <section class="PrimeiraSessao fullscreen-bg" style="background-image: url('<? echo $images ?>bg-sobre.png')";>            
            <article>
                <h1>Reinventar é o que nos move, o que nos instiga, o que nos dá energia.</h1>
                <h2>Aqui o jogo é aberto e o discurso é na prática.</h2>
                <p>
                    Inteligência e resultado com uma equipe de confiança e experiência de mercado, trilhando seus objetivos lado a lado.
                </p>
            </article>
        </section>

        
        <section class="SegundaSessao">
            
            <div class="Wrapper">
                <div class="esq">
                    <p>Hoje,<br class="DesktopItem">
                        gerimos o patrimônio
                        de 28 famílias.
                    </p>
                    <p>
                        Escolhemos ter um portfólio menor para ter uma entrega maior.<br class="MobileItem"><br class="MobileItem"> Isso quer dizer mais proximidade, atendimento personalizado e vibração a cada vitória.
                    </p>
                </div>

                <div>
                    <img src="<? echo $images ?>Grafismo11.svg" />
                </div>

                <div class="dir">
                    <p>E seu objetivo primário 
                        torna-se o nosso 
                        mindset diário.</p>
                    <p>
                        A base de tudo é a confiança e compartilhamento de todas as decisões e aprendizados.
                    </p>
                </div>
            </div>
            
        </section>

        <section class="TerceiraSessao">
            <p>Nossa Equipe</p>
                        
                <div class="TerceiraSessaoWrapper">

                    <div class="Box">
                        <a href="popup.php" class="popup-issuu">
                            <img src="<? echo $images ?>equipe.jpg" />
                            <p>Eduardo Scarceli</p>
                            <p>Founder partner</p>
                        </a>
                    </div>

                    <div class="Box">
                        <a href="popup.php" class="popup-issuu">
                            <img src="<? echo $images ?>equipe.jpg" />
                            <p>Ricardo Xavier</p>
                            <p>Founder partner</p>
                        </a>
                    </div>
                   

                    <div class="Box">
                        <a href="popup.php" class="popup-issuu">
                            <img src="<? echo $images ?>equipe.jpg" />
                            <p>Rafael Christiansen</p>
                            <p>Founder partner</p>
                        </a>
                    </div>

                    <div class="Box">
                        <a href="popup.php" class="popup-issuu">
                            <img src="<? echo $images ?>equipe.jpg" />
                            <p>Gilberto Almeida</p>
                            <p>Sócio • Gestão e Estratégia</p>
                        </a>
                    </div>

                    <div class="Box">
                        <a href="popup.php" class="popup-issuu">
                            <img src="<? echo $images ?>equipe.jpg" />
                            <p>Gilberto Almeida</p>
                            <p>Sócio • Gestão e Estratégia</p>
                        </a>
                    </div>

                    <div class="Box">
                        <a href="popup.php" class="popup-issuu">
                            <img src="<? echo $images ?>equipe.jpg" />
                            <p>Gilberto Almeida</p>
                            <p>Sócio • Gestão e Estratégia</p>
                        </a>
                    </div>

                    <div class="Box">
                        <a href="popup.php" class="popup-issuu">
                            <img src="<? echo $images ?>equipe.jpg" />
                            <p>Gilberto Almeida</p>
                            <p>Sócio • Gestão e Estratégia</p>
                        </a>
                    </div>

                    <div class="Box">
                        <a href="popup.php" class="popup-issuu">
                            <img src="<? echo $images ?>equipe.jpg" />
                            <p>Gilberto Almeida</p>
                            <p>Sócio • Gestão e Estratégia</p>
                        </a>
                    </div>

            </div>

        </section>

        <?php include 'assets/chama-contato.php'; ?>
        <?php include 'assets/footer.php'; ?>

    <script type="text/javascript">
        $('.LinkMenu:eq(1)').addClass('SessaoAtual');
    </script>
    </body>
</html>