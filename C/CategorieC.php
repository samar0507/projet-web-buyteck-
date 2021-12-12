<?php  
 include_once "../config.php";
		  
    class CategoriesCore {
    function afficherCategorie ($categories){
		echo "Id of categorie: ".$categories->getint_cat()."<br>";
		echo "Nom of categorie: ".$categories->getnom_cat()."<br>";	
	}
	
	function ajouterCategorie($categories){
		$sql="INSERT INTO categories (nom_cat) VALUES ( :nom_cat)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $nom_cat=$categories->getnom_cat();

		$req->bindValue(':nom_cat',$nom_cat);
	
            $req->execute(); 
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
	}
	
	function afficherCategories(){
		$sql="SELECT * From categories";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}

	function supprimerCategorie($int_cat){
		$sql="DELETE FROM categories where int_cat= :int_cat";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':int_cat',$int_cat);
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function recupererCategorie($int_cat){
		$sql="SELECT * from categories where int_cat=$int_cat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierCategorie($int_cat,$nom_cat){
		$sql="UPDATE categories SET int_cat='$int_cat',nom_cat='$nom_cat' WHERE int_cat='$int_cat'";
		
		$db = config::getConnexion();
		try{
				$db->query($sql);
				
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
			
		
	function rechercherListeCategorie($nom_cat){
		$sql="SELECT * from categories  WHERE nom_cat='$nom_cat'";
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
		$sql="SELECT * from categories order by nom_cat";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function imprimerCategories(){
		$sql="SELECT nom_cat From categories";
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
		$sql=" SELECT nom_cat From  categories  where nom_cat LIKE '%$char%'";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}

}

?>











