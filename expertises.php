<!DOCTYPE HTML>
<html>
	<head>
	<?php 
		include 'assets/config.php';
 
		$tituloPagina = 'Expertises - '. $empresa;
	?>
<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>
	</head>
	<body class="Expertises">
        <?php include 'assets/header.php'; ?>
        
        <section class="PrimeiraSessao fullscreen-bg" style="background-image: url('<? echo $images ?>montanhas_1.jpg')";>
            <article>
                <h1>Um relacionamento se mantém no dia a dia. <br>Bons resultados também.</h1>
                <p><strong>Somos uma gestora de patrimônios “boutique style”.</strong></p>
                <p>
                    Temos um número de clientes mais exclusivo para poder ter muito tempo para as demandas de cada um deles. É por isso que cada atendimento é personalizado e é desenvolvido de acordo com cada expectativa. É único.
                </p>
                <img src="<? echo $images ?>Seta.svg" />
            </article>
        </section>

        <section class="SegundaSessao">
            <h2>Como entendemos mais de você.</h2>
            <p>E alinhamos seus objetivos com nossas expertises.</p>
            <span></span>
        </section>

        <?php include 'assets/footer.php'; ?>

    <script type="text/javascript">
        $('.LinkMenu:eq(0)').addClass('SessaoAtual');
    </script>
    </body>
</html>