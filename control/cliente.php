<?php
	require('../model/cliente.php');

	$cliente = new Cliente();


	$cliente->setCpf($_POST['cpfCLi']);
	$cliente->setNome($_POST['nomeCli']);
	$cliente->setSobrenome($_POST['sobreCli']);
	$cliente->setdataNascimento($_POST['dtnascCli']);
	$cliente->setEmail($_POST['emailCli']);
	$cliente->setTelefone($_POST['telCli']);
	$cliente->setSenha($_POST['senhaCli']);

	$cliente->incluir();

	if($cliente->getValidacao() == 1){

		header('Location: ../viewer/confirmaCli.php');

	}
	else{

		echo "Vini chato";
	}

?>			

