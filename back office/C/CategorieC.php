<?php  
 include_once "../config.php";
		  
    class CategoriesCore {
    function afficherCategorie ($categories){
		echo "Id of categorie: ".$categories->getint_cat()."<br>";
		echo "Nom of categorie: ".$categories->getnom_cat()."<br>";	
	}
	
	function ajouterCategorie($categories){
		$sql="insert into categories (nom_cat) values ( :nom_cat)";
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
		$sql="SElECT * From categories";
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
			$query=$db->prepare($sql);
			$query->execute();

			$categories=$query->fetch();
			return $categories;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	
	function modifierCategorie($categories, $int_cat){
		try {
			$db = config::getConnexion();
			$query = $db->prepare('UPDATE categories SET nom_cat= :nom_cat  WHERE int_cat= :int_cat'
			);
			$query->execute([
				'nom_cat' => $categories->getnom_cat(),
				'int_cat' => $int_cat
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
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
		$sql="SELECT * from categories where nom_cat LIKE '$char%'";
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
		$sql=" SElECT nom_cat From  categories  where nom_cat LIKE '$char%'";
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











