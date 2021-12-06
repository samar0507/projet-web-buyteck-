<?PHP
class categories{
	private $int_cat;
	private $nom_cat;
	
	
	function __construct( $int_cat,$nom_cat){

		
		$this->int_cat=$int_cat;$this->nom_cat=$nom_cat;
	
	}
	
	function getint_cat(){
		return $this->int_cat;
	}
	function getnom_cat(){
		return $this->nom_cat;
	}



	function setint_cat($int_cat){
		$this->int_cat=$int_cat;
	}
	function setnom_cat($nom_cat){
		$this->nom_cat;
	}

	
	
}

?>