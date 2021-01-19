<?php 

session_start();
include "conexiune.php";
$username= $_POST['username'];
$password= $_POST['password'];

$check_user= mysql_query($conexiune, "SELECT * FROM users WHERE username='$username' AND password= '$password'");

 ?>
