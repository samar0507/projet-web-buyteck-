<?PHP

class produits{
	protected $idprod;
	protected $nom;
	protected $int_cat;
	protected $description; 
	protected $prix;
	protected $quantite;
	protected $disponibilite;
	protected $image;
	
	
	function __construct($nom,$int_cat,$description,$prix,$quantite,$disponibilite,$image){
	
		$this->nom=$nom;
		$this->int_cat=$int_cat;
		$this->description=$description;
		$this->prix=$prix;
		$this->quantite=$quantite;
		$this->disponibilite=$disponibilite;
		$this->image=$image;
		

	}
	function getIdprod(){
		return $this->idprod;
	}
	function setIdprod($idprod){
		$this->idprod=$idprod;
	}
	function getNom(){
		return $this->nom;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function getint_cat(){
		return $this->int_cat;
	}
	function setint_cat($int_cat){
		$this->int_cat=$int_cat;
	}
	function getDescription(){
		return $this->description;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function getPrix(){
		return $this->prix;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function getDisponibilite(){
		return $this->disponibilite;
	}
	function setDisponibilite($disponibilite){
		$this->disponibilite=$disponibilite;
	}
	function getImage(){
		return $this->image;
	}
	function setImage($image){
		$this->image=$image;
	}
	
	
}

?>