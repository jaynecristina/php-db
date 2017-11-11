<meta charset="utf-8">
<?php
$user = $_POST['user'];
$pas = $_POST['pass'];
$pass = md5(base64_encode($pas));

require('coneccao.php');
$sql = "SELECT * FROM cliente WHERE email = '$user' AND senha = '$pass'";
$query = mysqli_query($con, $sql);

if(mysqli_num_rows($query) > 0) {
	session_start();

	$_SESSION['user']=$user;
	$_SESSION['pass']=$pass;

	header('location:browse.html');
}
else{
	unset($_SESSION['user']);
	header('location:login.php?id=erro');
}
?>