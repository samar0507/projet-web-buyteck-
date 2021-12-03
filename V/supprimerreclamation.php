<?php
	include '../C/reclamationC.php';
    include '../C/reponseC.php';
	$reclamationC=new reclamationC();
	$reponseC=new reponseC();
	$reponseC->supprimerreponse($_GET["id_rec"]);
	$reclamationC->supprimerreclamation($_GET["id_rec"]);
   
	header('Location:reclamation.php');
?>