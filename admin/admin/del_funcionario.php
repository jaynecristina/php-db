
<?php
session_start();
if(isset($_SESSION['user'])){
	$logado = $_SESSION['user'];
}else{
	header('location:../../login.php');
}
if(isset($_GET['sair'])){
	unset($_SESSION['user']);
	header('location:../../login.php');
}

require("../../coneccao.php");

$id = $_GET['prod_id'];
$sql = "DELETE FROM usuarios WHERE id = '$id'";

$query =  mysqli_query($con, $sql);
if($query){
echo '
	<script>
		alert("Adimistrador removido!!");
		setTimeout(function(){
			window.location = "funcionarios.php";
		}, 100);
 	</script>';
}
?>