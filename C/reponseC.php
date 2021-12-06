<?php
include_once '../config.php';

include_once '../M/reponse.php';
class reponseC{
    function afficherlistereponse()
    {
        $sql="SELECT * FROM reponse WHERE id=:id";
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
    function afficherreponse()
{
    $sql="SELECT * FROM reponse";
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
function supprimerreponse($id_reclamation){
    $sql="DELETE FROM reponse WHERE id_reclamation=:id_reclamation";
    $db = config::getConnexion();
    $req=$db->prepare($sql);
    $req->bindValue(':id_reclamation', $id_reclamation);
    try{
        $req->execute();
    }
    catch(Exception $e){
        die('Erreur:'. $e->getMessage());
    }
}
function recupererreponse($id_rec){
    $sql="SELECT * from reponse where id_reclamation=$id_rec";
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

function ajouterreponse($reponse){
    $sql="INSERT INTO reponse(id_reclamation, content) 
    VALUES (:id_reclamation,:content)";
    $db = config::getConnexion();
    try{
        $query = $db->prepare($sql);
        $query->execute([
            'id_reclamation' => $reponse->getid_reclamation(),
            'content' => $reponse->getcontent(),
            ]);			
    }
    catch (Exception $e){
        echo 'Erreur: '.$e->getMessage();
    }
}
}
?>