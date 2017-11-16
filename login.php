<!DOCTYPE html>
<html lang="pt-br">
	<head>
                <meta name="viewport" content="width-device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="admin/css/bootstrap.min.css">
                <link rel="stylesheet" type="text/css" href="css/style.css">

		<title>Cadastrar Funcionário</title>
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
						?>
  					
	  					<div style="margin-bottom: 12px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="user" value="" placeholder="Usuário">       
						</div>

						<div style="margin-bottom: 12px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="pass" placeholder="Senha">
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

                                                            <div style="font-size:85%">Não tem uma conta? <a href="cad_user-Copia.php" onClick="$('#loginbox').hide(); ('#signupbox').show()">Crie uma aqui</a>
							</div>
							</div> 
						</form>
					</div>
				</div>	
			</div>
		</div>
            <div id="rodape">
			<ul>
				<li class="austtre"><a href="#">2017 Austtre</a></li>
				<li><a href="#">Sobre nós</a></li>
				<li class="btn"><a href="http://www.facebook.com/sharer/sharer.php?u=http://pt.stackoverflow.com/" target="_blank" class="share-btn facebook">
    			<i class="fa fa-facebook"></i></a></li>
    			<li><a href="http://twitter.com/share?url=http://pt.stackoverflow.com/&text=<TEXT>&via=<VIA>" target="_blank" class="share-btn twitter">
    			<i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
	</body>
</html>