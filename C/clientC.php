<?php
include_once '../config.php';

include_once '../M/client.php';
class clientC{
    function afficherlisteclient()
    {
        $sql="SELECT * FROM client WHERE id=:id";
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
    function afficherclient()
{
    $sql="SELECT * FROM client";
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
function recupererclient($id){
    $sql="SELECT * from personne where id=$id";
    $db = config::getConnexion();
    try{
        $query=$db->prepare($sql);
        $query->execute();

        $client=$query->fetch();
        return $client;
    }
    catch (Exception $e){
        die('Erreur: '.$e->getMessage());
    }
}
}
?>