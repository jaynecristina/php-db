<?php
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "projeto");
$con = mysqli_connect(HOST,USER,PASS) or die(" erro ");
$banco = mysqli_select_db($con, DB);

?>