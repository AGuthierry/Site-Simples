<!DOCTYPE html>
<html lang="pt-BR">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title>Mulher</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet">	
			
		<link href="css/style.css" rel="stylesheet" type="text/css" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
  
	<body>
		<div id="container-fluid">
			<div class="row-fluid">
				<div class="col-md-12">
					<?php include("menu.html"); ?>
				</div>		
			</div>		
			<div class="row-fluid">
				<div class="col-md-12">
					<div id="banner"></div>	
				</div>	
			</div>						
			<div class="row-fluid">
				<div class="col-md-12">		
					<div id="contact">
						<h1>Formulário de Contato</h1>
						<form action="acao.php" method="POST" id="formulario" name="formulario"  >
							<label>Nome:</label>
							<input type="text" name="nome" required />
							<label>E-mail:</label>
							<input type="email" name="email" required/>
							<label>Fone:</label>
							<input type="number" name="fone" required/>
							<label>Mensagem:</label>
							<textarea name="mensagem" cols="34" rows="2" >
							</textarea>
							<label>
								<button	type="submit">Enviar</button>
							</label>			
						</form>
					</div>
				</div>	
			</div>						
								
		</div>
	</body>
</html>