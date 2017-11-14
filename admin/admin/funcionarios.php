<!DOCTYPE html>
<html>
<head>
	<title>Funcionários</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="../css/bootstrap.min.css" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css" crossorigin="anonymous">
	<script src="../js/bootstrap.min.js"></script>
	<style type="text/css">
		* {margin:0 auto; padding:0px}
		thead { background: #CCC; font-weight: bold }
		#produtos { height:200px; float: left; margin: 50px 15px; text-align: center; background: #fff;}
		#produtos:hover { opacity: 0.8; transition: 0.5s; cursor: pointer;}
		#produtos a {position:  relative; top: 15px; background: red; color: white; padding: 5px 45px; text-decoration: none; cursor: pointer;}
		img { width: 50px; height: 50px; }
		#pag {clear: both; color: red}
		#pag a{color: red; font:55px arial;}
		#space { height: 100px;}
	</style>
</head>
<body>
<div class="container">
<?php
?>
	<div class="row" style="height: 0px">
		<h2>Funcionários</h2>
		<div id="busca">
			<form action="Gbusca.php" method="get">
			<div class="col-md-8">
				<input type="text" class="form-control" name="busca" placeholder="Buscar funcionario ...">
			</div>
			<div class="col-md-2">
				<input type="submit" class="form-control btn btn-primary" value="Buscar">
			</div>
                        </form>
                    <form action="../cad_fun.php">
                            <div class="col-md-2">
                                <input type="submit" class="form-control btn btn-primary" value="Cadastrar">
                            </div>
			</form>
		
	</div>	
</div>

<hr/>
<?php
require("../../coneccao.php");
$registros = 7;

$sql = "SELECT * FROM admin";
$query = mysqli_query($con, $sql);

if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];
}else{
	$pagina = 1;
}

$resultados = mysqli_num_rows($query);

$inicial = ($registros*$pagina)-$registros;
$numPaginas = ceil($resultados/$registros);

$sql = "SELECT * FROM admin LIMIT $inicial, $registros";
$query = mysqli_query($con, $sql);

echo "<div class='row'>
<table class='table table-striped'>
<thead>
<tr>
<td width='20%'>Nome</td>
<td width='60%'>Email</td>
<td width='20%'>Ação</td>
</tr>
</thead>
<tbody>
";
while($dados = mysqli_fetch_assoc($query)){
	
		echo "<tr>
			  <td>";
		echo "<h5>".$dados['nome']."</h5>";
		echo "</td>";
		echo "<td>";
		echo "<h5>".$dados['email']."</h5>";
		echo "</td>";
		echo "<td>
		<a class='btn btn-primary glyphicon glyphicon-edit' href='atualizaProdutos.php?prod_id=".$dados['id']."'> Editar</a>
		<a class='btn btn-primary glyphicon glyphicon-trash' href='del_funcionario.php?prod_id=".$dados['id']."'> Remover</a>
		</td>
		</tr>";

}
echo "</tbody>";
echo "</div>";
echo "<div class='row' id='space'>";
	echo "<div class='col-md-12'>";

	echo "</div>";
echo "</div>";
echo "</table>";
echo "<div class='row'>";
	echo "<div class='col-md-12'><center><ul>";
	for($i = 1; $i < $numPaginas + 1; $i++){
		echo "<a href='?pagina=".$i."'><button style='width:30px;' class='form-control btn btn-primary' >$i</button></a>";
	}
	echo "</center></ul></div>";
echo "</div>";
?>

</div>
</body>
</html>