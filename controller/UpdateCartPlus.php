<?php
include "../controller/panierController.php";
include "../model/panier.php";
    $panierC = new panierController();
    $panierC->updateCartPlus($_GET["pId"]);
    header('Location:../views/shopping_cart.php');      

    
?>