<?php 
include ("conexiune.php");

$nume = $_POST['nume'];
$email = $_POST['email'];
$subiect = $_POST['subiect'];
$mesaj = $_POST['email'];

$elevi=mysqli_query($conexiune, "INSERT INTO `contact` (`id`, `nume`, `email`, `subiect`, `mesaj`) VALUES (NULL, '$nume', '$email', '$subiect', '$mesaj')");
header('Location: index.php');
 ?>