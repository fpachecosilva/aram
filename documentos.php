

<!DOCTYPE HTML>
<html>
	<head>
	<?php 
		include 'assets/config.php';
 
        $tituloPagina = 'Documentos - '. $empresa;
        $urlPagina = $Documentos;
	?>
<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>
	</head>
	<body class="Documentos">
        <?php include 'assets/header.php'; ?>

        <section class="PrimeiraSessao">
            <div class="Wrapper">
                
                <div class="esq">
                    <h2>Documentos</h2>

                    <a href="">
                        <div class="Box">
                            <span></span>
                            <p>Política de<br> Controles internos</p>
                        </div>
                    </a>

                    <a href="">
                        <div class="Box">
                            <span></span>
                            <p>Política de Segurança<br> da Informação</p>
                        </div>
                    </a>

                    <a href="">
                        <div class="Box">
                            <span></span>
                            <p>Política de<br> Investimentos Pessoais</p>
                        </div>
                    </a>

                    <a href="">
                        <div class="Box">
                            <span></span>
                            <p>Política de<br> Gestão de Riscos</p>
                        </div>
                    </a>

                    <a href="">
                        <div class="Box">
                            <span></span>
                            <p>Código de<br> Conduta e Ética</p>
                        </div>
                    </a>

                    <a href="">
                        <div class="Box">
                            <span></span>
                            <p>Formulário<br> de Referência</p>
                        </div>
                    </a>

                    <a href="">
                        <div class="Box">
                            <span></span>
                            <p>Rateio e Divisão<br> de Ordens</p>
                        </div>
                    </a>
                    
                </div>

                <div class="dir">
                    <div class="BoxDir">
                        <span></span>
                        <p>
                            A Aram Capital Gestão de Recursos Ltda. está em fase de credenciamento e ainda não está autorizada a desempenhar a atividade de administração de carteiras de valores mobiliários.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <?php include 'assets/chama-contato.php'; ?>
        <?php include 'assets/footer.php'; ?>

    <script type="text/javascript">
        $('.LinkMenu:eq(2)').addClass('SessaoAtual');
    </script>
    </body>
</html>