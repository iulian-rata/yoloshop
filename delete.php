<?php 
include "conexiune.php";

$id=$_GET['id'];
print_r($id);
mysqli_query($conexiune, "DELETE FROM `produse` WHERE `produse`.`id` = '$id'");
header('Location: admin.php');

 ?>