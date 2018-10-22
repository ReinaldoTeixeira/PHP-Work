<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script
		  src="https://code.jquery.com/jquery-3.3.1.js"
		  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
		  crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

		<?php

		require("../model/conexao.php");
		
		$query = $con->query("SELECT * FROM evento");

		?>

	</head>
		<body>
			<form class="form-horizontal" action="" method=""> 
				<?php

				include("../viewer/menu.php");

				?>
				<div class="container">
					<div class="row" style="margin-top: 30px" align="center">
						<?php
							while ($row = $query->fetch()) {
							
							$id = $row['id'];
							$evento = $row['evento'];
							$data = $row['data'];
							$end = $row['endereco'];	

						?>
							<div class="form-group col-md-4" >
								<form class="form-horizontal" action="" method="POST">
									<div class="card border-info mb-3" style="width: 18rem;">
									  	<div class="card-header text-info">EVENTO</div>
									  	<div class="card-body text-info">
										    <h5 class="card-title"><?= $evento?></h5>
											<button type="button" class="btn btn-outline-success btn-sm" onclick="cardComprar (<?= $id; ?>)">Comprar</button>		
											<button type="button" class="btn btn-outline-secondary  btn-sm"
											onclick="cardInfo(<?= $id; ?>)">Informãções</button>
									  	</div>
									</div> 	
								</form>					
				  			</div>
				  		<?php

				  		}

				  		?>
					</div>	
				</div>				  		
		  		<div class="modal fade" id="modalog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				    <div class="modal-dialog modal-dialog-centered" role="document">
				        <div class="modal-content">
						    <div class="modal-header">
						     	<h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						    </div>
						    <div class="modal-body">
								<form class="form-horizontal"  > 
									<div class="container">
										<div class="form-group">
							   				<label style="text-align: left" class="col-md-12">Email:</label>
							   				<div class="col-md-12">
							   				 	<input type="email" id="email" class="form-control" name="emailCli" maxlength="60" required>
										 	</div>
						  				</div>
										<div class="form-group">
						   				<label style="text-align: left" class="col-md-12">Senha:</label>
							   				<div class="col-md-12">
							   				 	<input type="password" id="senha" class="form-control" name="senhaCli" maxlength="15" required>
										 	</div>
						  				</div>
								        <div class="form-group" align="center"> 
									      <div class="">
									       <button class="btn btn-outline-info btn-sm"  onclick="login()" name="idCard" value="<?= $id ?>" id="btnCadastrar" >Cadastrar</button>
									        <button type="button" class="btn btn-outline-success btn-sm" onclick="login()">Entrar</button> 
									    </div>
									</div>
							   	</form>
						   	</div>
				 		</div>
					</div>
	  			</div>
		  		<div class="modal fade" id="modalinfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
				    <div class="modal-dialog modal-dialog-centered" role="document">
				        <div class="modal-content">
						    <div class="modal-header">
						     	<h5 class="modal-title" id="exampleModalLongTitle">Informações</h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
						          <span aria-hidden="true">&times;</span>
						        </button>
						    </div>
						    <div class="modal-body">
								<form class="form-horizontal" action="inserirCli.php" method="POST"> 
									<div class="container">
									   	<p id="informacoes"></p>	   	
								  	</div>
							   	</form>
						   	</div>
						</div>
					</div>
	  			</div>
			</form>
		</body>
</html>
<script type="text/javascript">

function formatDate(data, formato) {
  if (formato == 'pt-br') {
    return (data.substr(0, 10).split('-').reverse().join('/'));
  } else {
    return (data.substr(0, 10).split('/').reverse().join('-'));
  }
}

function cardInfo(id) 
{

	if (id != "") {
		
		$.ajax({
			url: '../model/jInfo.php',
			type: 'POST',
			dataType: 'json',
			data: {codigo: id}, 
		})
		.done(function(data) {
			$("#informacoes").empty();		
			d = formatDate(data.data, 'pt-br');
			console.log(data); // checking the json's return
			$("#informacoes").append("<h4>Descrição: <span class='badge badge-secondary'>" + data.evento + "</span> </h4>" + "<h4>Data: <span class='badge badge-secondary'>" + d +"</span> </h4>" + "<h4>Local: <span class='badge badge-secondary'>" + data.endereco +"</span> </h4>" + "<h4>Inscrição: <span class='badge badge-secondary'>" + data.preco +"</span> </h4>"); //append putting at the end of my object whatever I get json

				//				$("#testando").append('<p>'+index+' '+el+'</p>');

		})


		}
	
	$("#modalinfo").modal('show');

}

function login(){
		console.log('passei aqui');
		let email = $("#email").value,
			senha = $("#senha").value;


		$.ajax({
			url: '../control/AuthLogin.php',
			type: 'POST',
			dataType: 'json',
			data: {email : email, senha : senha}, 
		})
		.done(function(data) {
			console.log(data);
		});

		console.log('terminei');
}

	
function cardComprar(id) 
{

	$("#btnCadastrar").attr('value', id);


	$("#modalog").modal('show');

}

</script>