<?php
include "../C/panierController.php";
include "../M/panier.php";
    $panierC = new panierController();
    $panierC->addToCart($_GET["pId"]);
    //header('Location:../V/list.php');      

   
   
   
   
    header("Refresh:0; url=../V/list.php");

?>