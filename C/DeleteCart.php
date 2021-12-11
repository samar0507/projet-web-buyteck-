<?php
include "../C/panierController.php";
$u=new panierController();
$u->deleteCart($_GET["pId"]);
header('Location:../V/shopping_cart.php');