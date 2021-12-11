<?PHP
class Panier{
	private $id_panier;
	private $id_client;
    private $id_produit;
    private $qte;

	

	function __construct($id_client,$id_produit,$qte){
		$this->id_client=$id_client;
		$this->id_produit=$id_produit;
		$this->qte=$qte;

	}

	function getid_panier(){
		return $this->id_panier;
	}
	function setid_panier($id_panier){
		$this->id_panier=$id_panier;
	}
    function getid_produit(){
		return $this->id_produit;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
    function getid_client(){
		return $this->id_client;
	}
	function setid_client($id_client){
		$this->id_client=$id_client;
	}
    function getqte(){
		return $this->qte;
	}
	function setqte($qte){
		$this->qte=$qte;
	}

}

?>