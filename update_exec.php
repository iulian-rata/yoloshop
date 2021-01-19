<?php 
include "conexiune.php";

$id = $_POST['id'];
$producator= $_POST['producator'];
$model= $_POST['model'];
$pret= $_POST['pret'];
$descriere= $_POST['descriere'];
$poza= $_POST['poza'];

mysqli_query($conexiune, "UPDATE produse SET id = '$id', producator = '$producator', model = '$model', pret = '$pret', poza='$poza' WHERE produse.id = '$id'");
header('Location: admin.php');

 ?>