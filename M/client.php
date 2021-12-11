<?php
	class client{
		// private $id=null;
		private $nom=null;
		private $prenom=null;
        private $username=null;
		private $bloqué=null;
		
		private $email=null;
		// private $dateinscription;
		private $passwordd=null;
		private $noo=null;
		// private $dateb=null;
		function __construct( $username, $passwordd,$nom, $prenom,  $email, $noo/*, $dateb*/){
			// $this->id=$id;
            $this->username=$username;
			$this->passwordd=$passwordd;
			$this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->noo=$noo;
			// $this->dateb=$dateb;

			
			// $this->dateinscription=$dateinscription;
		}
		// function getid(){
		// 	return $this->id;
		// }
		function getnom(){
			return $this->nom;
		}

		function getprenom(){
			return $this->prenom;
		}
        function getusername(){
			return $this->username;
		}
		// function getAdresse(){
		// 	return $this->adresse;
		// }
		function getemail(){
			return $this->email;

		}
		function getpasswordd(){
			return $this->passwordd;
		}

		function getnoo(){
			return $this->noo;
		}
		function getbloqué(){
			return $this->bloqué;
		}
		// function getdateb(){
		// 	return $this->dateb;
		// }
		// function getDateinscription(){
		// 	return $this->dateinscription;
		// }
		function setnom(string $nom){
			$this->nom=$nom;
		}
		function setprenom(string $prenom){
			$this->prenom=$prenom;
		}
		// function setAdresse(string $adresse){
		// 	$this->adresse=$adresse;
		// }
		function setemail(string $email){
			$this->email=$email;
		}
        function setusername(string $username){
			$this->username=$username;
		}
        // function setid(string $id){
		// 	$this->id=$id;
		// }
		function setpasswordd(string $passwordd){
			$this->passwordd=$passwordd;
		}
		function setnoo(string $noo){
			$this->noo=$noo;
		}
		// function setdateb(string $dateb){
		// 	$this->dateb=$dateb;
		// }
		// function setdateinscription(string $dateinscription){
		// 	$this->dateinscription=$dateinscription;
		// }
		
	}


?>