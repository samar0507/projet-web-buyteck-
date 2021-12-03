<?php

include_once '../config.php';

include_once '../M/reclamationp.php';
class reclamationC{
    function afficherlistereclamation()
    {
        $sql="SELECT * FROM reclamation WHERE id_rec=:id_rec";
        $db=config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
           }
        catch(Exception $e)
        {
            die('Erreur:'.$e->getMessage());
        }
    }
   
    function afficherreclamation()
{
    $sql="SELECT * FROM reclamation ";
    $db=config::getConnexion();
    try{
        $liste=$db->query($sql);
        return $liste;
       }
    catch(Exception $e)
    {
        die('Erreur:'.$e->getMessage());
    }
}
function supprimerreclamation($id_rec){
    $sql="DELETE FROM reclamation WHERE id_rec=:id_rec";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id_rec', $id_rec);
    try{
        $req->execute();
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
    }
}
function ajouterreclamation($reclamation){
			$sql="INSERT INTO reclamation ( id, comment, date_rec, typer, etat) 
			VALUES (:id,:comment,:date_rec,:typer,:etat)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'id' => $reclamation->getid(),
					'comment' => $reclamation->getcomment(),
					'date_rec' => $reclamation->getdate_rec(),
					'typer' => $reclamation->gettyper(),
					'etat' => $reclamation->getetat()
				]);			
			}
            catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}
        }
function recupererreclamation($id_rec){
    $sql="SELECT * from reclamation where id_rec=$id_rec";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $reclamation=$query->fetch();
        return $reclamation;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

function modifierreclamation($reclamation, $id_rec){
    try {
        $db = config::getConnexion();
        $query = $db->prepare(
            'UPDATE reclamation SET 
                etat= :etat 
            WHERE id_rec= :id_rec'
        );
        $query->execute([
            'etat' => $reclamation->getetat(),
            'id_rec' => $id_rec
        ]);
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}
function recupererreclamation2($id){
    $sql="SELECT * from reclamation where id=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $reclamation=$query->fetch();
        return $reclamation;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}

}

?>