<?php
define("HOST", "trabalho-bd-php.000webhostapp.com");
define("USER", "id3601061_admin");
define("PASS", "admin");
define("DB", "id3601061_projeto");
$con = mysqli_connect(HOST,USER,PASS) or die(" when i outside and saw the moom,i breathe and think of you, i'm think of you ooo ");
$banco = mysqli_select_db($con, DB);

?>