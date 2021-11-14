<?php
include "../config/config.php";
class panierController{
    function addToCart($id_produit)
    {
  		$sql="insert into buytech.panier(id_client,id_produit,qte) values (:id_client,:id_produit,:qte)";
  		$db = config::getConnexion();
  		try
      {
          $req=$db->prepare($sql);
          $qty=1;
      		$req->bindValue(':id_client',1);
      		$req->bindValue(':id_produit',$id_produit);
      		$req->bindValue(':qte',$qty);
             $req->execute();
      }

      catch (Exception $e)
      {
          
        // if($e->getCode()==23000)
        // {
        //     $sql1="update buytech.panier set qte=qte-1 where id_produit='$id_produit'";
        // $db=config::getConnexion();
        // try
        // {
        //     $db->query($sql1);
        // }
        // catch (Exception $e)
        // {
        //     echo 'error: '.$e->getMessage();
        // }
      }

  	}
function getCart()
    {
      $sql="select * from buytech.panier ";
      $db= config::getConnexion();
      try
      {
        return $db->query($sql);
      }
      catch (Exception $e)
      {
        echo 'Error: '.$e->getMessage();
      }

    }
    function getProd($id_produit)
    {
        $sql="select * from buytech.produits where id_produit='$id_produit'";
        $db=config::getConnexion();
        try
        {
            return $db->query($sql)->fetch();
        }
        catch (Exception $e)
        {
            echo 'error:'.$e->getMessage();
        }
    }
    function deleteCart($id_produit)
    {
        $sql="delete from buytech.panier where  id_produit='$id_produit'";
        $db=config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo 'error:'.$e->getMessage();
        }
    }
    function updateCartPlus($idP)
    {
        $sql="update buytech.panier set qte=qte+1 where id_produit='$idP'";
        $db=config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo 'error: '.$e->getMessage();
        }
    }
    function updateCartMinus($idP)
    {
        $sql="update buytech.panier set qte=qte-1 where id_produit='$idP'";
        $db=config::getConnexion();
        try
        {
            $db->query($sql);
        }
        catch (Exception $e)
        {
            echo 'error: '.$e->getMessage();
        }
    }
}
    ?>
