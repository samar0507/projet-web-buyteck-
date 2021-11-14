<?php
include "../controller/panierController.php";
include "../model/panier.php";
    $panierC = new panierController();
    $panierC->updateCartMinus($_GET["pId"]);
    header('Location:../views/shopping_cart.php');      

    
?>