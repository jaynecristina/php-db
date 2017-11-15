<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<link rel="stylesheet" type=
			  "text/css" href="css/bootstrap.min.css">
		<title>Projeto</title>
		<meta charset="utf-8">
	</head>
	
	<body style="background:#e1e1e1">
		<div class="container" style="margin-top:60px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
	  				<div class="panel-heading"><h3 class="panel-title"><strong>Acesso</strong></h3>
		  			<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Problemas com o Login?</a></div>
	  				</div>
					<div class="panel-body">
	   					<form role="form" action="vlogin.php" method="post">
	   					
	   					<?php
							if (isset($_GET['id'])){
							$id = $_GET['id'];
						}	if (isset($id)) {
							if ($id == "erro") {
								echo "<div class='alert alert-danger'>
							<a class='close' data-dismiss='alert' href='login.php'>×</a>Usuário ou Senha Incorreto!
						</div>";
							}}
                                                        if (isset($_GET['id'])){
							$id = $_GET['id'];
						}	if (isset($id)) {
							if ($id == "per") {
								echo "<div class='alert alert-danger'>
							<a class='close' data-dismiss='alert' href='login.php'>×</a>Usuário não permitido!
						</div>";
							}}
						?>
  					
	  					<div style="margin-bottom: 12px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="user" value="" placeholder="Usuário">       
						</div>

						<div style="margin-bottom: 12px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="pass" placeholder="Senhass">
						</div>

						<div class="input-group">
							  <div class="checkbox" style="margin-top: 0px;">
									<label>
										<input id="login-remember" type="checkbox" name="remember" value="1">Lembre-me
									</label>
							</div>
						</div>

	  						<button type="submit" class="btn btn-success">Logar</button>

	  						<hr style="margin-top:10px;margin-bottom:10px;" >

	  						<div class="form-group">

							</div> 
						</form>
					</div>
				</div>	
			</div>
		</div>
	</body>
</html>