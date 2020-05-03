	<header>
		<article>
			<a href="<? echo $url ?>" title="<? echo $empresa ?>" alt="<? echo $empresa ?>" id="Logo">

			<?php  
				if ($urlPagina == $Sobre) {
					echo '<img src="' . $images . 'logo-invertido.svg" title=" '. $empresa . '" alt=" '.$empresa.'" />';

				} else {
					echo '<img src="' .$images. 'logo.svg" title=" '. $empresa .'" alt=" '.$empresa.'" />';
				}			
			?>

			</a>

			<a href="javascript:void(0)" id="ClicarForaMenu"></a>

			<a href="javascript:void(0)" id="AbrirMenu" class="MobileItem">
				<div id="Topo"></div>
				<div id="Medio"></div>
				<div id="Baixo"></div>
			</a>

			<nav>
				<a href="<? echo $url ?>" class="MobileItem">Home</a>
				<a class="LinkMenu" href="<? echo $Expertises ?>"><div>Expertises</div></a>
				<a class="LinkMenu" href="<? echo $Sobre ?>"><div>Sobre nós</div></a>
				<a class="LinkMenu" href="<? echo $Documentos ?>"><div>documentos</div></a>
				<a class="LinkMenu" href="<? echo $Contato ?>"><div>contato</div></a>
				<img src="<? echo $images ?>LogoReduzido.svg" id="LogoMenu" class="MobileItem" title="<? echo $empresa ?>" alt="<? echo $empresa ?>" />
			</nav>
		</article>
	</header>