<?php
	include '../Controler/clientC.php';
	$clientC=new clientC();
    
	$user=$clientC->recupererclientemail($_POST["email"]);
  
	$clientC->modifpassword($user,$user["email"]);
    //print_r($user);
	header('Location:login.php');
?>