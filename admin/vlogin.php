<meta charset="utf-8">
<?php
$user = $_POST['user'];
$pas = $_POST['pass'];
$per = "1";
$pass = md5(base64_encode($pas));

require('../coneccao.php');
$sql = "SELECT * FROM usuarios WHERE email = '$user' AND senha = '$pass'  ";
$query = mysqli_query($con, $sql);

if(mysqli_num_rows($query) > 0) {

                session_start();
                $_SESSION['user']=$user;
                $_SESSION['pass']=$pass;
                
                $sql = "SELECT id_per FROM usuarios  WHERE email = '$user' AND senha = '$pass' ";
                $query = mysqli_query($con, $sql);
                while($dados = mysqli_fetch_assoc($query))
                {
                    if($per = $dados['id_per'])
                    {
                      header('location:admin/index.php');
                    }
                    else{
                            unset($_SESSION['user']);
                            header('location:login.php?id=per');
                        }
                }
}
else{
	unset($_SESSION['user']);
	header('location:login.php?id=erro');
}

?>
