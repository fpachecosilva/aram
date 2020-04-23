	<header>
		<article>
			<a href="<? echo $url ?>" title="<? echo $empresa ?>" alt="<? echo $empresa ?>" id="Logo">
				<img src="<? echo $images ?>logo.svg" title="<? echo $empresa ?>" alt="<? echo $empresa ?>" />
			</a>

			<a href="javascript:void(0)" id="ClicarForaMenu"></a>

			<a href="javascript:void(0)" id="AbrirMenu" class="MobileItem">
				<div id="Topo"></div>
				<div id="Medio"></div>
				<div id="Baixo"></div>
			</a>

			<nav>
				<a href="<? echo $url ?>" class="MobileItem">Home</a>
				<a href="<? echo $Expertises ?>">Expertises</a>
				<a href="<? echo $Sobre ?>">Sobre nós</a>
				<a href="<? echo $Documentos ?>">documentos</a>
				<a href="<? echo $Contato ?>">contato</a>
				<img src="<? echo $images ?>LogoReduzido.svg" id="LogoMenu" class="MobileItem" title="<? echo $empresa ?>" alt="<? echo $empresa ?>" />
			</nav>
		</article>
	</header>