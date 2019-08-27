<?php

// Capturando valores do formulario (POST)
$frmNome 	 = $_POST['nome'];
$frmEmail 	 = $_POST['email'];
$frmFone 	 = $_POST['fone'];
$frmMensagem = $_POST['mensagem'];

echo "->> Campo Nome - <b>".$frmNome."</b><br />";
echo "->> Campo E-mail - <b>".$frmEmail."</b><br />";
echo "->> Campo Telefone - <b>".$frmFone."</b><br />";
echo "->> Campo Mensagem - <b>".$frmMensagem."</b><br />";

/*
	**** Implementações futuras ****
	
	Referencia para implementação
	da função de envio de e-mail
	
	http://php.net/manual/pt_BR/function.mail.php
	http://php.net/manual/pt_BR/ref.mail.php
	
*/




?>