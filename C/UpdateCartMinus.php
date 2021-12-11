<?php
include "../C/panierController.php";
include "../M/panier.php";
    $panierC = new panierController();
    $panierC->updateCartMinus($_GET["pId"]);
    header('Location:../V/shopping_cart.php');      

    
?>