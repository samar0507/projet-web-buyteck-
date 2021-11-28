<?php
	include 'reclamationC.php';
    include 'reponseC.php';
	$reclamationC=new reclamationC();
	$reclamationC->supprimerreclamation($_GET["id_rec"]);
    $reponseC=new reponseC();
	$reponseC->supprimerreponse($_GET["id_reclamation"]);
	header('Location:reclamation.php');
?>