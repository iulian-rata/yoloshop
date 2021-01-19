<?php 
include "conexiune.php";

$id=$_GET['id'];
print_r($id);
mysqli_query($conexiune, "DELETE FROM `contact` WHERE `contact`.`id` = '$id'");
header('Location: admin.php');

 ?>