<?php
require_once './AttackPokemon.php';

class Pokemon
{
    protected $name;
    protected $url;
    private $hp;
    protected $attachPokemon;

    function __construct($name, $url, $hp,$mina,$maxa,$speca,$proba){
        $this->name = $name;
        $this->url = $url;
        $this->hp = $hp;
        $this->attachPokemon=new AttackPokemon($mina,$maxa,$speca,$proba);
    }

    //getters
    function getName(){return $this->name;}
    function getUrl(){return $this->url;}
    function getHp(){return $this->hp;}
    function getAttachPokemon(){return $this->attachPokemon;}

    function getattMin(){return $this->attachPokemon->attackMinimal;}
    function getattMax(){return $this->attachPokemon->attackMaximal;}
    function getspecialatt(){return $this->attachPokemon->specialAttack;}
    function getproba(){return $this->attachPokemon->probabilitySpecialAttack;}

    //setters a ajouter plus tard

    function isDead(){
        return ($this->hp<=0);
    }

    function whoAmI() {
        echo "Nom: $this->name <br>";
        echo "HP: $this->hp <br>";
        echo "Attaque minimale: " . $this->attachPokemon->attackMinimal . "<br>";
        echo "Attaque maximale: " . $this->attachPokemon->attackMaximal . "<br>";
        echo "Probabilité d'attaque spéciale: " . $this->attachPokemon->probabilitySpecialAttack . "% <br>";
        echo "Multiplicateur attaque spéciale: x" . $this->attachPokemon->specialAttack . "<br>";
    }
    function attack(Pokemon $p){
        $attackValue = rand($this->attachPokemon->attackMinimal, $this->attachPokemon->attackMaximal);
        if (rand(0, 100) <= $this->attachPokemon->probabilitySpecialAttack) {
            $attackValue *= $this->attachPokemon->specialAttack;
        }
        $p->hp -= $attackValue;
        return "$this->name attaque $p->name avec $attackValue dégâts !";
    }
    //comment il attaque : on a une attaque min et une attaque max , pour l'attque speciale on génere un nombre compris entre les 2 attaques et on essaie de voir si il s'agit d'une attaque spéciale ou non on générant un nombre aléatoire et on voit s'il est inférieur à la probabilité ou non
}