<!DOCTYPE HTML>
<html>
	<head>
	<?php 
		include 'assets/config.php';
 
        $tituloPagina = 'Sobre - '. $empresa;
        $urlPagina = $Popup;
	?>
<title><? echo $tituloPagina ?></title>
	<?php include 'assets/head.php'; ?>
	</head>
	<body class="Popup">

        <div class="PopupWrapper">
            <img src="<? echo $images ?>equipe.jpg" />
            <div>
                <p class="Destaque">Eduardo Scarceli</p>
                <p class="Subtitulo">Founder Partner</p>
                <p>
                    Eduardo foi um dos TOP performers do banco Credit Suisse nos últimos anos e teve uma carreira como um dos principais fast tracks em promoção dentro do banco de investimentos no Brasil.<br><br>

                    Iniciou a sua carreira no mercado financeiro na tesouraria do Banco HSBC, onde contribuia para administrar os recursos proprietários do banco. Antes de fundar a Aram Capital, Eduardo foi Vice-Presidente de área do Banco Credit Suisse Hedging-Griffo até 2017 e um dos responsáveis pelo atendimento de grandes clientes do banco, como famílias e empresários. Com mais de 10 anos de experiência, focou na área de investimentos e com viés macroeconômico, tendo adquirido larga experiência nos mercados e investimentos locais e internacionais.<br><br>

                    Bacharel em Administração de Empresas pela ESPM, concluiu curso de IB Investment Banking no Insper, em São Paulo, e possui certificação CFP e certificação CVM de consultor de valores mobiliários.

                </p>
            </div>
        </div>

        <?php include 'assets/footer.php'; ?>
    </body>
</html>