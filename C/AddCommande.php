<?php
include "../C/commandesController.php";
include_once "../config.php";

include "../M/commandes.php";
    $panierC = new commandesController();
    $panierC->addFromCart($_GET["id_client"]);

    
?>