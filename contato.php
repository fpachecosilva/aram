<!DOCTYPE HTML>
<html>
	<head>
        <?php 
            include 'assets/config.php';
    
            $tituloPagina = 'Contato - '. $empresa;
            $urlPagina = $Contato;
        ?>
        <title><? echo $tituloPagina ?></title>
        <?php include 'assets/head.php'; ?>
    </head>
    
	<body class="Contato">
        <?php include 'assets/header.php'; ?>

        <section class="PrimeiraSessao fullscreen-bg">
            <article>
                <h1>O nosso maior patrimônio é a relação de proximidade com nossos clientes.</h1>
                <p>Nosso time especializado está pronto para entender, assessorar e transformar seus objetivos em segurança e futuro.</p>
            </article>
        </section>

        <section class="SegundaSessao">
            
            <form action="" method="post">
                <h2>Fale Conosco</h2>
                <div>
                    <div>
                        <!-- <label for="nome">Nome:</label> -->
                        <input id="nome" type="text" name="nome" placeholder="Nome" autofocus />
                    </div>
                    <div>
                        <!-- <label for="email">Email:</label> -->
                        <input id="email" type="email" name="email" placeholder="email@email.com" />
                    </div>
                </div>                
                <div>
                    <!-- <label for="mensagem">Mensagem:</label> -->
                    <textarea id="mensagem" name="mensagem" placeholder="Escreva sua mensagem"></textarea>
                </div>
                <a href="">ENVIAR</a>
            </form>

            <img src="<? echo $images ?>Grafismo14.svg" />

            <div class="Mapa">
                <h2>Onde estamos</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3656.5216378613577!2d-46.67459268447536!3d-23.585618068374828!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5758d0373a43%3A0x1195438fedd74f1b!2sAv.%20Pres.%20Juscelino%20Kubitschek%2C%20180!5e0!3m2!1spt-BR!2sbr!4v1588585805374!5m2!1spt-BR!2sbr" width="547" height="344" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>

        </section>

        <?php include 'assets/footer.php'; ?>

        <script type="text/javascript">
            $('.LinkMenu:eq(3)').addClass('SessaoAtual');
        </script>
    </body>
</html>