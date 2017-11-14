<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="width-device-width, initial-scale=1">
		<link rel="stylesheet" type=
			  "text/css" href="css/bootstrap.min.css">
		<title>Painel</title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	
	<body style="background:#e1e1e1">
	
	<?php
	error_reporting(0);
	session_start();
	if (isset($_SESSION['user'])) {
		$logado = $_SESSION['user'];
	}else{
		header('location:../login.php');
	}

	if (isset($_GET['sair'])) { 
		unset($_SESSION['user']);
//		echo "<meta HTTP-EQUIV='refresh' CONTENT='5;URL=index.php'>";

		header("Location: index.php");

	}

	?>
	
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-toggle"></span>
      </button>
      <a class="navbar-brand" href="#">Painel de Controle</a>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
			<a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $logado;?><span class="caret"></span></a>
         
          <ul id="g-account-menu" class="dropdown-menu" role="menu">
            <li><a href="#">Meu Perfil</a></li>
          </ul>
        </li>
        <!-- <li><a href="index.php?envia=sair"><i class="glyphicon glyphicon-remove-circle"></i> Sair</a></li> -->
        <li>
        	<form action="?sair" method="get">
		<input type="submit" style="float: right; margin-right: 15px; position: absolute; top: 8px;" class="btn btn-primary" name="sair" value="Sair">
	</form>
        </li>
      </ul>
    </div>
  </div><!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container">
<div class="row">
    <div class="col-md-3">
      <!-- Left column -->
      <a href="#"><strong><i class="glyphicon glyphicon-wrench"></i> Ferramentas</strong></a>  
      
      <hr>
      
      <ul class="list-unstyled">
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">
          <h5>Settings <i class="glyphicon glyphicon-chevron-down"></i></h5>
          </a>
            <ul class="list-unstyled collapse in" id="userMenu">
                <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-envelope"></i> Messages <span class="badge badge-info">4</span></a></li>
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> Options</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-comment"></i> Shoutbox</a></li>
                <li><a href="funcionarios.php"><i class="glyphicon glyphicon-user"></i> Lista de funcionários</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-flag"></i> Transactions</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-exclamation-sign"></i> Rules</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
            </ul>
        </li>
        <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">
          <h5>Reports <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
        
            <ul class="list-unstyled collapse" id="menu2">
                <li><a href="#">Information & Stats</a>
                </li>
                <li><a href="#">Views</a>
                </li>
                <li><a href="#">Requests</a>
                </li>
                <li><a href="#">Timetable</a>
                </li>
                <li><a href="#">Alerts</a>
                </li>
            </ul>
        </li>
        <li class="nav-header">
        <a href="#" data-toggle="collapse" data-target="#menu3">
          <h5>Social Media <i class="glyphicon glyphicon-chevron-right"></i></h5>
          </a>
        
            <ul class="list-unstyled collapse" id="menu3">
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-circle"></i> Twitter</a></li>
            </ul>
        </li>
      </ul>
           
      <hr>
      
  	</div><!-- /col-3 -->
    <div class="col-md-9">
      	
      <!-- column 2 -->	
      <ul class="list-inline pull-right">
         <li><a href="#"><i class="glyphicon glyphicon-cog"></i></a></li>
         <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-comment"></i><span class="count">3</span></a><ul class="dropdown-menu" role="menu"><li><a href="#">1. Is there a way..</a></li><li><a href="#">2. Hello, admin. I would..</a></li><li><a href="#"><strong>All messages</strong></a></li></ul></li>
         <li><a href="#"><i class="glyphicon glyphicon-user"></i></a></li>
         <li><a title="Add Widget" data-toggle="modal" href="#addWidgetModal"><span class="glyphicon glyphicon-plus-sign"></span> Add Widget</a></li>
      </ul>
      <a href="#"><strong><i class="glyphicon glyphicon-dashboard"></i> My Dashboard</strong></a>  
      
      	<hr>
      
		<div class="row">
           
            
          
            <!-- center left-->	
         	<div class="col-md-6">
			  <div class="well">Inbox Messages <span class="badge pull-right">3</span></div>
              
              <hr>
              
              <div class="btn-group btn-group-justified">
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-plus"></i><br>
                  Service
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-cloud"></i><br>
                  Cloud
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-cog"></i><br>
                  Tools
                </a>
                <a href="#" class="btn btn-primary col-sm-3">
                  <i class="glyphicon glyphicon-question-sign"></i><br>
                  Help
                </a>
              </div>
              
              <hr>
              
              <div class="panel panel-default">
                  <div class="panel-heading"><h4>Reports</h4></div>
                  <div class="panel-body">
                    
                    <small>Success</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                        <span class="sr-only">72% Complete</span>
                      </div>
                    </div>
                    <small>Info</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                    <small>Warning</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (warning)</span>
                      </div>
                    </div>
                    <small>Danger</small>
                    <div class="progress">
                      <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete</span>
                      </div>
                    </div>

                  </div><!--/panel-body-->
              </div><!--/panel-->
	
			  <hr>              

			  <!--tabs-->
              <div class="container">
                <div class="col-md-4">
                <ul class="nav nav-tabs" id="myTab">
                  <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                  <li><a href="#messages" data-toggle="tab">Messages</a></li>
                  <li><a href="#settings" data-toggle="tab">Settings</a></li>
                </ul>
                
                <div class="tab-content">
                  <div class="tab-pane active" id="profile">
                    <h4><i class="glyphicon glyphicon-user"></i></h4>
                    Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                      dolor, in sagittis nisi.</p>
                  </div>
                  <div class="tab-pane" id="messages">
                    <h4><i class="glyphicon glyphicon-comment"></i></h4>
                    Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    <p>Quisque mauris augu.</p>
                  </div>
                  <div class="tab-pane" id="settings">
                    <h4><i class="glyphicon glyphicon-cog"></i></h4>
                    Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                    <p>Quisque mauris augue, molestie.</p>
                  </div>
                </div>
              	</div>
              </div>
              
              <hr>

   
          	</div><!--/col-->
        	<div class="col-md-6">
				<div class="panel panel-default">
                  <div class="panel-heading"><h4>Notices</h4></div>
                  <div class="panel-body">
                    
                  <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    This is a dismissable alert.. just sayin'.
                  </div>

                  This is a dashboard-style layout that uses Bootstrap 3. You can use this template as a starting point to create something more unique.
                  <br><br>
                  Visit the Bootstrap Playground at <a href="http://bootply.com">Bootply</a> to tweak this layout or discover more useful code snippets.
                  </div>
              	</div>
              
              	<div class="panel panel-default">
                	<div class="panel-heading">
                      	<div class="panel-title">
                  		<i class="glyphicon glyphicon-pencil pull-right"></i>
                      	<h4>Poste uma Notícia</h4>
                      	</div>
                	</div>
                	<div class="panel-body">

                      <form action="" method="post" class="form form-vertical">
                       
                        <div class="control-group">
                          <label>Título</label>
                          <div class="controls">
                           <input type="text" name="titulo" class="form-control" placeholder="Escreva o Título">
                          </div>
                        </div>      
                        
                        <div class="control-group">
                          <label>Texto</label>
                          <div class="controls">
                          	<textarea name="texto" class="form-control"></textarea>
                          </div>
                        </div> 
                             
                        <div class="control-group">
                          <label>Categoria</label>
                          <div class="controls">
                             <select name="cate" class="form-control">
                             <option value="import">Importante</option>
                             <option value="lembre">Lembrete</option>
                             </select>
                          </div>
                        </div>    
                        
                        <div class="control-group">
                          	<label></label>
                        	<div class="controls">
                        	<button name="enviar" type="submit" class="btn btn-primary">
                              Postar
                            </button>
                        	</div>
                        </div>
						  <hr>   
                        
                      </form>
                      
                    <?php
						
						if (isset($_POST['enviar'])) {
							
							require("../coneccao.php");
						
							$titulo = $_POST['titulo'];
							$texto = $_POST['texto'];
							$cate = $_POST['cate'];
							
							if ($cate=='import'){
								$icon = "glyphicon glyphicon-flag";
							} else {
								$icon = "glyphicon glyphicon-paperclip";
							}
							
							$data = date('Y:m:d');
							$hora = date('H:i:s');
							
							$sql = "INSERT INTO noticias (user_autor, titulo, texto, icon, data, hora) VALUES ('".$logado."','".$titulo."','".$texto."','".$icon."','".$data."','".$hora."')";
							
							$query = mysqli_query($con,$sql);

			if (!$query) {
				echo "<div class='alert alert-danger'>
							<a class='close' data-dismiss='alert' href='login.php'>×</a>Erro ao postar
						</div>";
			}else{
				echo "<div class='alert alert-success'>
							<a class='close' data-dismiss='alert' href='login.php'>×</a>Postagem feita!
						</div>";
			}
						}
					?>
                
                
                  </div><!--/panel content-->
                </div><!--/panel-->
              
              	<div class="panel panel-default">
                  <div class="panel-heading"><div class="panel-title"><h4>Engagement</h4></div></div>
                  <div class="panel-body">	
                   	<div class="col-xs-4 text-center"><img src="http://placehold.it/80/BBBBBB/FFF" class="img-circle img-responsive"></div>
                    <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EFEFEF/555" class="img-circle img-responsive"></div>
                    <div class="col-xs-4 text-center"><img src="http://placehold.it/80/EEEEEE/222" class="img-circle img-responsive"></div>
                  </div>
               </div><!--/panel-->
              
			</div><!--/col-span-6-->
     
      </div><!--/row-->
      
      <hr>
      
      <a href="#"><strong><i class="glyphicon glyphicon-comment"></i> Notícias</strong></a>  
      
      <hr>
      
      <div class="row">
        <div class="col-md-12">
          <ul class="list-group">
      
      <?php
	require("../coneccao.php");

	$sql = "SELECT * FROM noticias  ORDER BY id DESC";
	$query = mysqli_query($con, $sql);

	while ($dados = mysqli_fetch_assoc($query)){
		$data = $dados['data'];
	
		echo '<li class="list-group-item"><a href="#"><i class="'.$dados['icon'].'"></i> <small>('.date('d/m',strtotime($data)).')</small> '.$dados['titulo'].'</a></li>';
	}

	?>
      
            
          </ul>
        </div>
      </div>
  	</div><!--/col-span-9-->
</div>
</div>
	</body>
</html>