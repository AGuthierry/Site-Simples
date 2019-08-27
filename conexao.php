<?php

// paranetros de configuraчуo do BD
$servidor 	= "127.0.0.1";
$usuario 	= "root";
$senha 	 	= "";


// conectando ao banco
$conexao_mysql = mysql_connect($servidor,$usuario,$senha) or die("Erro de conexуo!");


//selecionando a base de dados
mysql_select_db("pw", $conexao_mysql);



?>