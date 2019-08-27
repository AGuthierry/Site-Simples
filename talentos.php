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
					<div id="talentos">
						<h1>Banco de talentos</h1>
						<form action="" method="POST" id="formulario" name="formulario"  >
							<label>Nome:</label>
							<input type="text" name="nome" required />
							<label>E-mail:</label>
							<input type="email" name="email" required/>
							<label>Fone:</label>
							<input type="number" name="fone" required/>
							<label>Data de nascimento:</label>
							<input type="text" name="dtnascimento" required />
							<label>Endereço:</label>
							<input type="text" name="endereco" required />
							<label>Cidade:</label>
							<input type="text" name="cidade" required />
							<label>UF:</label>
							<select name="uf">
								<option value="">Selecione</option>
								<option value="DF">Distrito Federal</option>
								<option value="GO">Goias</option>
							</select>
							<label>Cep:</label>
							<input type="text" name="cep" required />
							<label>Sexo:</label>
							Masculino: <input type="radio" name="sexo" value="M" />
							Feminino: <input type="radio" name="sexo" value="F" />
							<label>Estado civil:</label>
							Casado: <input type="radio" name="estadocivil" value="C" />
							Solteiro: <input type="radio" name="estadocivil" value="S" />							
							<label>Nivel de formação:</label>
							<select name="formacao">
								<option value="">Selecione</option>
								<?php
									include("conexao.php"); 
									//criação do mysql
									$sql = "select idformacao,nome from formacao";
									//Execução do sql
								    $executasql = mysql_query($sql, $conexao_mysql);
									//numero de linhas retornadas
									$resultadoLinhas = mysql_num_rows ($executasql);
									
									if($resultadoLinhas>0){
									
										while($linha = mysql_fetch_array($executasql)){
											echo "<option value'".$linha['idformacao']."'>".utf8_encode($linha['nome'])."</option>";
										}
									
									}
								?>
							</select>
							<br /><br />
							<label>
								<button	type="submit">Enviar</button>
							</label>			
						</form>
					</div>
				</div>	
			</div>						
			<div class="row-fluid">
				<div class="col-md-12">						
					<?php include("rodape.html"); ?>
				</div>		
			</div>						
		</div>
	</body>
</html>