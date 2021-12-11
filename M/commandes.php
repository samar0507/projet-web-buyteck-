<?PHP
class Commandes{
	private $idCommande;
	private $numCommande;
    private $dateCommande;
    private $status;
    private $typeLivraison;
    private $typePaimenet;
    private $idClient;
    private $idProduit;
	

	function __construct($idCommande,$numCommande,$dateCommande,$status,$typeLivraison,$typePaimenet,$idClient,$idProduit){
		$this->id_commande=$id_Commande;
        $this->num_commande=$numC_ommande;
        $this->date_commande=$date_Commande;
        $this->status=$status;
        $this->type_livraison=$type_Livraison;
        $this->type_paiment=$typeP_aimenet;
        $this->id_client=$id_Client;
		$this->id_produit=$id_Produit;
		

	}

	function getid_commande(){
		return $this->id_commande;
	}
	function setid_commande($id_Commande){
		$this->id_commande=$id_Commande;
	}
    function getnum_commande(){
		return $this->num_commande;
	}
	function setnum_commande($num_Commande){
		$this->num_commande=$num_Commande;
	}
    function getdate_commande(){
		return $this->date_commande;
	}
	function setdate_commande($date_Commande){
		$this->date_commande=$date_Commande;
	}
    function gettype_livraison(){
		return $this->type_livraison;
	}
	function settype_livraison($type_Livraison){
		$this->type_livraison=$type_Livraison;
	}
    function gettype_paiment(){
		return $this->type_paiment;
	}
	function settype_paiment($type_Paimenet){
		$this->type_paiment=$type_Paimenet;
	}

    function getid_client(){
		return $this->id_client;
	}
	function setid_client($id_Client){
		$this->id_client=$id_Client;
	}
    

}

?>