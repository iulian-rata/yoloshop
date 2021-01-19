<?php 
include_once '/models/category.php'
class SiteController;
{
	public function actionIndex()
	{
	$categories = array();
	$categories = category::getCategoriesList();
	require_once('/yoloshop/index.php')
    return true;
 ?>}
