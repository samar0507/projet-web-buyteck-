<?php

 class client 
 {
     private int $id;
     private string $Nom;
     private string $Prenom;
    private string $email;
     private string $adresse;
     private int $Tel;
     public function __construct(int $id,int $Tel,string $Nom,string $Prenom,string $adresse,string $email)
     {$this->id= $id;
        $this->Tel= $Tel;
         $this->Nom= $Nom;
         $this->Prenom= $Prenom;
         $this->email= $email;
         $this->adresse= $adresse;
        }
     public function getid():int
     {
         return $this->id;
     } 
     public function setid():int
     {
        $this->id=$id;
     } 
     public function getNom():int
     {
         return $this->Nom;
     }  
     public function setNom():int
     {
        $this->Nom=$Nom;
     } 
     public function getPrenom():string
     {
         return $this->Prenom;
     }    
     public function setPrenom():string
     {
          $this->Prenom=$Prenom;
     }
    
     public function getTel():string
     {
         return $this->Tel;
     }   
      public function setTel():string
     {
          $this->Tel=$Tel;
     }   

     public function getemail():string
     {
         return $this->email;
     }   
      public function setemail():string
     {
          $this->email=$email;
     }   
     public function getadresse():string
     {
         return $this->adresse;
     }   
      public function setadresse():string
     {
          $this->adresse=$adresse;
     }
       
    }
 
    
?>