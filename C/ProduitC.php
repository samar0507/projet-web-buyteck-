<?php 
 include_once "../config.php";
 include_once "../M/Produit.php";

    class ProduitsCore {
function afficherproduit ($produits){
		echo "Identifiant du produit: ".$produits->getIdprod()."<br>";
		echo "Nom: ".$produits->getNom()."<br>";
		echo "Identifiant du catégorie: ".$produits->getint_cat()."<br>";
		echo "Description: ".$produits->getDescription()."<br>";
		echo "Prix: ".$produits->getPrix()."<br>";
		echo "Quantité: ".$produits->getQuantite()."<br>";
		echo "Disponibilité: ".$produits->getDisponibilite()."<br>";
		echo "image: ".$produits->getImage()."<br>";
    }
/*	function calculerSalaire($produits){
		echo $produits->getprix() * $produits->getquantite();
	}*/
	function ajouterProduits($produits){
		$sql="insert into produits (nom,int_cat,description,prix,quantite,disponibilite,image) values (:nom,:int_cat,:description,:prix,:quantite,:disponibilite,:image)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
	
        $nom=$produits->getNom();
        $int_cat=$produits->getint_cat();
        $description=$produits->getDescription();
        $prix=$produits->getPrix();        
        $quantite=$produits->getQuantite();
        $disponibilite=$produits->getDisponibilite();
		$image=$produits->getImage();
		$req->bindValue(':nom',$nom);
		$req->bindValue(':int_cat',$int_cat);
		$req->bindValue(':description',$description);
		$req->bindValue(':prix',$prix);
		$req->bindValue(':quantite',$quantite);
		$req->bindValue(':disponibilite',$disponibilite);
		$req->bindValue(':image',$image);
        $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
	}
	
	
	function afficherProduits(){
		$sql="SELECT idprod,nom,nom_cat,description,prix,quantite,disponibilite,image From produits inner join categories on produits.int_cat=categories.int_cat ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function ListeProduits(){
		$sql="SELECT nom,nom_cat,description,prix,quantite,disponibilite,image From produits inner join categories on produits.int_cat=categories.int_cat ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerProduits($idprod){
		$sql="DELETE FROM produits where idprod= :idprod";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':idprod',$idprod);
		try{
            $req->execute();
           // header('Location: index.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}


//////////////////////////////////////////////////////////


	function afficherparcategories($nom_cat){
		$sql="SELECT nom_cat,nom,description,prix,quantite,disponibilite,image From produits inner join categories on produits.int_cat=categories.int_cat where nom_cat='$nom_cat'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function recupererProduits($idprod){
		$sql="SELECT * from produits where idprod=$idprod";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

	////////////////////////////////////////////


function rechercherListeProduits($nom){
		$sql="SELECT idprod,nom,nom_cat,description,prix,quantite,disponibilite,image From produits inner join categories on produits.int_cat=categories.int_cat where nom='$nom'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function rechercherAVANCER($char){
		$sql=" SELECT *  From produits inner join categories on produits.int_cat=categories.int_cat where nom LIKE '%$char%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function triNom(){
		$sql="SElECT idprod,nom,nom_cat,description,prix,quantite,disponibilite,image From produits inner join categories on produits.int_cat=categories.int_cat order by nom DESC";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
function triPrix(){
		$sql="SElECT idprod,nom,nom_cat,description,prix,quantite,disponibilite,image From produits inner join categories on produits.int_cat=categories.int_cat order by prix";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function calcul(){
		$sql="SELECT sum(prix) as total,sum(quantite) as quantite from produits ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	//////////////////////////


	function modifierProduits($idprod,$nom,$int_cat,$description,$prix,$quantite,$disponibilite){
		$sql="UPDATE produits SET idprod='$idprod',nom='$nom',int_cat='$int_cat',description='$description',prix='$prix',quantite='$quantite',disponibilite='$disponibilite'  WHERE idprod='$idprod'";
		
		$db = config::getConnexion();
		try{
				$db->query($sql);
				
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	
	}






	
?>

