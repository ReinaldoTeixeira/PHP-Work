<?php	

$emailCli = $_POST['emailCli'];
$senhaCli = $_POST['senhaCli'];
$idCard = $_POST['idCard'];

?>

<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
	</head>
		<body>
			<form class="form-horizontal" action="../control/cliente.php" method="POST"> 
				<?php
				include("../viewer/menu.php");
				?>
				<div class="container" style="margin-top: 30px">
					<div class="form-group" >
						<div class="form-group">
			   				<label style="text-align: left" class="col-md-6">CPF:</label>
			   				<div class="col-md-6">
			   				 	<input id="cpf" type="text" class="form-control" name="cpfCLi" maxlength="14" required>
						 	</div>
		  				</div>
						<div class="form-group">
			   				<label style="text-align: left" class="col-md-6">Nome:</label>
			   				<div class="col-md-6">
			   				 	<input type="text" class="form-control" name="nomeCli" maxlength="30" required>
						 	</div>
		  				</div>
						<div class="form-group">
			   				<label style="text-align: left" class="col-md-6">Sobrenome:</label>
			   				<div class="col-md-6">
			   				 	<input type="text" class="form-control" name="sobreCli" maxlength="50">
						 	</div>
						</div>
						<div class="form-group">
			   				<label style="text-align: left" class="col-md-6">Email:</label>
			   				<div class="col-md-6">
			   				 	<input type="email"class="form-control" name="emailCli" maxlength="60" readonly="true" value=" <?= $emailCli?>"required>
						 	</div>
						</div>
						<div class="form-group">
			   				<label style="text-align: left" class="col-md-6">Telefone:</label>
			   				<div class="col-md-6">
			   				 	<input id="tel" type="text"class="form-control" name="telCli" maxlength="13" required>
						 	</div>
						</div>
						<div class="form-group">
			   				<label style="text-align: left" class="col-md-6">Data de nascimento:</label>
			   				<div class="col-md-6">
			   				 	<input type="date" class="form-control" name="dtnascCli" maxlength="8" required>
						 	</div>
		  				</div>
		  				<div class="form-group">
			   				<label style="text-align: left" class="col-md-6">Senha:</label>
			   				<div class="col-md-6">
			   				 	<input type="password" class="form-control" name="senhaCli" maxlength="15" required>
						 	</div>
		  				</div>
				        <div class="form-group"> 
					      <div class="col-md-6">
					       <button class="btn btn-primary btn-info" type="submit">Criar Conta</button>
					       <button class="btn btn-primary btn-success" type="submit">Voltar</button> 
					      </div>
					    </div>
					</div>
		  		</div>
			</form>
		</body>
</html>

<script>

    $(document).ready(function () { 
        var $cpf = $("#cpf");
        $cpf.mask('000.000.000-00', {reverse: true});
    });

    $(document).ready(function () { 
        var $cpf = $("#tel");
        $cpf.mask('00 00000-0000', {reverse: true});
    });

</script>