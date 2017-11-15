<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<link rel="stylesheet" type=
                      "text/css" href="admin/css/bootstrap.min.css">
		<title>Cadastrar Funcionário</title>
		<meta charset="utf-8">
                <style>
                    #rodape {
                        position: absolute;
                        margin-top: 71px;
                        width: 100%;
                        height: 80px;
                        background: black;
                        color: white;
                            }

#rodape ul {
    padding:0px;
    margin:0px;
    list-style:none;
	position: relative;
	top: 50%;
	transform: translateY(-50%);
}

#rodape ul li { 
	display: inline;
	margin-left: 20px;
}

#rodape ul li a {
	color: #EDEDED;
    text-decoration: none;
}

#rodape ul li a:hover {
    color: limegreen;
}

#rodape ul .btn {
	margin-left: 60%;
}

#rodape ul .austtre {
	margin-left: 10%;
}

.share-btn {
    display: inline-block;
    color: #ffffff;
    border: none;
    padding: 10px;
    width: 20px;
	border-radius: 100%;
    box-shadow: 0 2px 0 0 rgba(0,0,0,0.2);
    outline: none;
    text-align: center;
}

.share-btn:hover {
    color: limegreen;
}

.share-btn:active {
    position: relative;
    top: 2px;
    box-shadow: none;
    color: #e2e2e2;
    outline: none;
}

.twitter     { background-color: #1c1c1c; }
.facebook    { background-color: #1c1c1c; }
                </style>
	</head>
	
	<body style="background:#e1e1e1">
		<div class="container" style="margin-top:60px">
			<div class="col-md-4 col-md-offset-4">
				<div class="panel panel-default">
	  				<div class="panel-heading"><h3 class="panel-title"><strong>Cadastrar Cliente
                                                </h3>
		  			<div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#"></a></div>
	  				</div>
					<div class="panel-body">
	   					<form role="form" action="" method="post">
	   					
	   					<?php
							if (isset($_GET['id'])){
							$id = $_GET['id'];
						}	if (isset($id)) {
							if ($id == "erro") {
								echo "<div class='alert alert-danger'>
							<a class='close' data-dismiss='alert' href='login.php'>×</a>Há campos vazios!
						</div>";
							}}
						?>
 						<label>Tipo</label><br>
	  					<div style="margin-bottom: 12px" class="input-group">
                                                   <span class="input-group-addon"><i class=" glyphicon glyphicon-asterisk"></i></span>
							
                                                    <select name="tipo" class="form-control">
                                                        <option value="2">Selecionar Cargo</option>
                                                        <option value="1">Administrador</option>
                                                        <option value="0">Cliente</option>
                                                        </select>      
						</div>
                                                    
  						<label>Usuário</label><br>
	  					<div style="margin-bottom: 12px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							<input id="login-username" type="text" class="form-control" name="user" value="" placeholder="user">       
						</div>
						
						<label>Email</label><br>
	  					<div style="margin-bottom: 12px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							<input id="login-username" type="text" class="form-control" name="email" value="" placeholder="exemplo@mail.com">
						</div>
						
						<label>Senha</label><br>
						<div style="margin-bottom: 12px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="pass" placeholder="•••••••">
						</div>
						
						<label>Repita a Senha</label><br>
						<div style="margin-bottom: 12px" class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							<input id="login-password" type="password" class="form-control" name="pasus" placeholder="•••••••">
						</div>

	  						<button type="submit" name="Enviar"class="btn btn-success">Registrar</button>

	  						<hr style="margin-top:10px;margin-bottom:10px;" >
 
						</form>
					</div>
				</div>	
			</div>
		</div>
            <div id="rodape">
			<ul>
                            <li class="austtre"><a href="index.html">2017 Austtre</a></li>
				<li><a href="#">Sobre nós</a></li>
				<li class="btn"><a href="http://www.facebook.com/sharer/sharer.php?u=http://pt.stackoverflow.com/" target="_blank" class="share-btn facebook">
    			<i class="fa fa-facebook"></i></a></li>
    			<li><a href="http://twitter.com/share?url=http://pt.stackoverflow.com/&text=<TEXT>&via=<VIA>" target="_blank" class="share-btn twitter">
    			<i class="fa fa-twitter"></i></a></li>
			</ul>
		</div>
	</body>
</html>

<?php 

require("coneccao.php");

if(isset($_POST['Enviar'])){

$nome = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$per = $_POST['tipo'];

$passC = md5(base64_encode($pass));

$sql = "INSERT INTO usuarios (id_per,nome,email, senha) VALUES ('$per','$nome', '$email', '$passC')";

$query = mysqli_query($con, $sql);
if($query){
	echo "<script>alert('Usuário Cadastrado!')</script>";
}else{
	echo "<script>alert('Usuário não Cadastrado!')</script>";
}
}
?>