<?php

// Captura de valores da URL (GET)
$pagina = $_GET['pagina'];

	// Decis�o de qual arquivo carregar
	switch($pagina){
		case "sobre":
			include("sobre.php");
		break;
		case "galeria":
			include("galeria.php");
		break;		
		case "contato":
			include("contato.php");
		break;
		case "talentos":
			include("talentos.php");			
		break;
		default:
			include("principal.php");
	}

	
	
?>