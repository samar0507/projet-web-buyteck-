<?php
	include_once  "../C/CategorieC.php";
	$CategoriesCore=new CategoriesCore();
	$CategoriesCore->supprimerCategorie($_POST["int_cat"]);
	header("Location:categories.php");
?>