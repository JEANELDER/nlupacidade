<?php
include 'site/fixos/header.php';

$pagina = null;

if(isset($_GET['pagina'])){

	$pagina = $_GET['pagina'];

			switch ($pagina) {
				case 'cadastro':
							include 'site/cadastro.php';
					break;
				case 'lista':
							include 'site/lista.php';
					break;
				case 'servicos':
							include 'site/busca_servicos.php';
					break;
				case 'prestador':
							include 'site/prestadorServico.php';
					break;
				default:
					include 'site/home.php';
					break;
			}
}
else{
include 'site/home.php';
}

include 'site/fixos/footer.php';
?>