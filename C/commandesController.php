<?php
class commandesController{
  function getCart($id_client)
    {
      $sql="select * from projet_web.panier where id_client='$id_client' ";
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
        $sql="select * from projet_web.produits where idprod='$id_produit'";
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
    function addFromCart($id_client)
    {
        $cartList=$this->getCart($id_client);
        $num_commande=random_int(1000000,9999999);
        $v=0;
        foreach ($cartList as $cart)
        {
            $pId=$cart["id_produit"];
            $qty=$cart["qte"];
            $prod=$this->getProd($pId);
            $v=$v+$prod["prix"]*$qty;
            $sql="insert into projet_web.detailcommande (id_produit,num_commande,qty) values ('$pId','$num_commande','$qty')";
          //$sql2="update amammou.produit set quantite = quantite- '$qty' where  reference='$pId'";
            $db=config::getConnexion();
            try
            {
                $db->query($sql);
            }
            catch (Exception $e)
            {
                echo 'error :'.$e->getMessage();
            }
         }
        $date= date("Y-m-d H:i:s");
    $sql2="insert into projet_web.commande(num_commande,date_commande,status,prixTotal,type_Livraison,type_Paiment,id_Client) values ('$num_commande','$date','PENDING','$v','DELIVERY','ONLINE','$id_client')";
    try
    {
        $db->query($sql2);
    }
    catch (Exception $e)
    {
        echo 'error :'.$e->getMessage();
    }
   
    $sql3="delete from projet_web.panier where id_client='$id_client'";
    try
    {
        $db->query($sql3);
    }
    catch (Exception $e)
    {
        echo 'error :'.$e->getMessage();
    }
    header('Location:../V/stripe.php?num_commande= '.$num_commande.'');      

}
function getCommande($client)
    {
      $sql="select * from projet_web.commande where id_client='$client' order by date_commande desc ";
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

    function getCommandeStripe($num_commande)
    {
      $sql="select * from projet_web.commande where num_commande='$num_commande' ";
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

    function getDetailCommande($num_commande)
    {
      $sql="select * from projet_web.detailcommande where num_commande='$num_commande' ";
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

    function UpdateOrder($num_commande,$status)
    {
        $sql="update projet_web.commande set status='$status'  where num_commande='$num_commande'";
        $db=config::getConnexion();
        try
        {
           $db->query($sql);
        }
        catch (Exception $e)
        {
            echo 'error :'.$e->getMessage();
        }
    }

    function getCommande2($num_commande)
    {
      $sql="select * from projet_web.commande where num_commande='$num_commande'  ";
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


}
    ?>
