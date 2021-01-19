<?php 
include ("conexiune.php");

$producator= $_POST['producator'];
$model= $_POST['model'];
$pret= $_POST['pret'];
$descriere= $_POST['descriere'];
$poza= $_POST['poza'];

$elevi=mysqli_query ($conexiune, "INSERT INTO `produse` (`id`, `producator`, `model`, `pret`, `descriere`, `poza`) VALUES (NULL, '$producator', '$model', '$pret', '$descriere', '$poza')");

 ?>