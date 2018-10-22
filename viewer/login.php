<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</head>
		<body>
			<form class="form-horizontal" action="" method=""> 
				<?php
				include("../viewer/menu.php");
				?>
			</form>
			<form class="form-horizontal" action="menu_user.php" method="POST"> 
				<div class="col-lg-4 col-lg-offset-4">
					<div class="container">
						<div class="col-xs-3">
							<div align="middle">
								<img src="..\Imagens\Icones\usuario.png" width="100" height="100" >
							</div>
						</div>
						<div class="form-group">
			   				<label class="col-md-12">Login</label>
			   				<div class="col-xs-3">
			   					 	<input type="text" class="form-control" name="loginUser">
							</div>
			  			</div>
						<div class="form-group" >
			   				<label class="col-md-12">Senha</label>
			   				<div class="col-xs-3" align="middle">
			   					 	<input type="password" class="form-control" name="keyUser">
							</div>
			  			</div>
						<div class="form-group" >
							<div class="col-xs-3" align="middle">
								<button type="submit" class="btn btn-success btn-group-sm"> ENTRAR</button>
								<button type="submit" class="btn btn-info btn-group-sm"> CADASTRAR</button>
							</div>
			  			</div>			  				 
			  		</div>		
				</div> 
			</form>
		</body>
</html>