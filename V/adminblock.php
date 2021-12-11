<?php
	include '../Controler/clientC.php';
	$clientC=new clientC();
    $client=$clientC->recupererclient($_GET["username"]);
	$clientC->bloquerclient($client,$_GET["username"]);
	header('Location:afficherclient.php');
?>