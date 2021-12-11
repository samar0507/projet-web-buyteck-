<?php

 class reclamation
 {
     private  $id_rec;
     private  $comment;
     private  $id;
     private  $date_rec;
    private  $typer;
     private  $etat;
     public function __construct(int $id,string $comment,string $date_rec,string $typer,string $etat)
     {
        $this->id= $id;
         $this->comment= $comment;
         $this->date_rec= $date_rec;
         $this->typer= $typer;
         $this->etat= $etat;
        }
     public function getid_rec():int
     {
         return $this->id_rec;
     } 
     public function setid_rec():int
     {
        $this->id_rec=$id_rec;
     } 
     public function getid():int
     {
         return $this->id;
     }  
     public function setid():int
     {
        $this->id=$id;
     } 
     public function getcomment():string
     {
         return $this->comment;
     }    
     public function setcomment():string
     {
          $this->comment=$comment;
     }
    
     public function getdate_rec():string
     {
         return $this->date_rec;
     }   
      public function setdate_rec():string
     {
          $this->date_rec=$date_rec;
     }   

     public function gettyper():string
     {
         return $this->typer;
     }   
      public function settyper():string
     {
          $this->typer=$typer;
     }   
     public function getetat():string
     {
         return $this->etat;
     }   
      public function setetat():string
     {
          $this->etat=$etat;
     }
       
    }
 
    
?>