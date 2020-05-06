	<header>
		<article>
			<a href="<? echo $url ?>" title="<? echo $empresa ?>" alt="<? echo $empresa ?>" id="Logo">

				<? echo '<img src="' .$images. 'logo.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />' ?>
				
			</a>

			<a href="javascript:void(0)" id="ClicarForaMenu"></a>

			<a href="javascript:void(0)" id="AbrirMenu" class="">
				<div id="Topo"></div>
				<div id="Medio"></div>
				<div id="Baixo"></div>
			</a>

			<nav>
				<a href="<? echo $url ?>" class="">Home</a>
				<a class="LinkMenu" href="<? echo $Expertises ?>"><div>Expertises</div></a>
				<a class="LinkMenu" href="<? echo $Sobre ?>"><div>Sobre nós</div></a>
				<a class="LinkMenu" href="<? echo $Documentos ?>"><div>documentos</div></a>
				<a class="LinkMenu" href="<? echo $Contato ?>"><div>contato</div></a>
				<img src="<? echo $images ?>LogoReduzido.svg" id="LogoMenu" class="" title="<? echo $empresa ?>" alt="<? echo $empresa ?>" />
			</nav>
		</article>
	</header>




	