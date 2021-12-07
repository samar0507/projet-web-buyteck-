<?php
	include '../Controler/clientC.php';
	$clientC=new clientC();
	$clientC->supprimerclient($_GET["username"]);
	header('Location:afficherclient.php');
?>