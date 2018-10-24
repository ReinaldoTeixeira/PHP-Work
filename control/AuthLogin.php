<?php
	header('Content-type: application/json');

	require('../model/cliente.php');

	$temp = json_decode($_POST['email'], true);
	$email = $temp->email;
	$senha = $temp->senha; 	 	

	$cli = new Cliente();

	$login  = $cli->authLogin($email,$senha);

	


	echo json_encode($login);
?>