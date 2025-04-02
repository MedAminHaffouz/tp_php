<?php
class Etudiant{
    public $nom;
    public $notes=[];
    public function __construct($noms ,$notes){
        $this->notes=$notes;
        $this->nom=$noms;
    }
    public function afficherNote(){
        foreach($this->notes as $note){
              echo $note;
        }
    }
    public function moyenne(){
        $somme=0;
        foreach($this->notes as $note){
          $somme+=$note;
        }
        return $somme /count($this->notes);
    }
    public function admis(){
        if($this->moyenne()>=10){
            echo "admis";
        }
        else{
            echo "non admis";
        }
    }
} 

?>