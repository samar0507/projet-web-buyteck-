<?PHP
include_once "../C/ProduitC.php";
include_once "config.php";
$ProduitsCore=new ProduitsCore();
if (isset($_POST["idprod"])) {
	$ProduitsCore-> supprimerProduits($_POST["idprod"]);
	header('Location: produits.php');
}

?>