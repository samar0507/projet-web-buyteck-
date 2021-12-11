<?php
	include '../Controler/clientC.php';
	$clientC=new clientC();
    $client=$clientC->recupererclient($_GET["username"]);
	$clientC->debloquerclient($client,$_GET["username"]);
	//echo $_GET["username"];
    header('Location:afficherclient.php');
?>