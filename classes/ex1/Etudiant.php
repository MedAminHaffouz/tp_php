<?php

class Etudiant
{
    protected $nom;
    protected $notes=[];

    public function __construct($nom,$notes=[]){
        $this->nom=$nom;
        $this->notes=$notes;
    }
    //getters ahd setters meme si ce n'est pas demandé mais c'est nécessaire peut-etre ici
    public function getNom(){return $this->nom;}
    public function setNom($nom){$this->nom=$nom;}
    public function getNotes(){return $this->notes;}
    public function setNotes($notes){$this->notes=$notes;}
    //public function addNote($note){$this->notes[]=$note;}

    public function afficheNotes(){
        foreach($this->notes as $note){
            echo $note;
        }
    }

    public function calcMoyenne(){
        if (count($this->notes)==0){
            return 0;
        }
        return array_sum($this->notes) / count($this->notes);
    }

    public function estAdmis(){
        if($this->calcMoyenne()>=10){
            echo "Admis";
        }
        else{
            echo "Pas Admis";
        }
    }
}

