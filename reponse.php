<?php

 class reponse
 {
     private int $id;
     private string $content;
     private int $id_reclamation;
    
     public function __construct(int $id_reclamation,string $content )
     {$this->id_reclamation= $id_reclamation;
        $this->content= $content;
        }
     public function getid_reclamation():int
     {
         return $this->id_reclamation;
     } 
     public function setid_reclamation():int
     {
        $this->id_reclamation=$id_reclamation;
     } 
     public function id():int
     {
         return $this->id_rep;
     }  
     public function setid():int
     {
        $this->id=$id;
     } 
    
     public function getcontent():string
     {
         return $this->content;
     }    
     public function setcontent():string
     {
          $this->content=$content;
     }   
    }
 
?>