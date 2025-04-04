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

    function whoAmI(){
        echo $this->name;
        echo "<br>";
        echo $this->hp;
        echo "<br>";
        echo $this->attachPokemon->attackMinimal." -> ".$this->attachPokemon->attackMaximal;
        echo "<br>";
    }
    function attack(Pokemon $p){
        $attackValue = rand($this->attachPokemon->attackMinimal, $this->attachPokemon->attackMaximal);
        if (rand(0, 100) <= $this->attachPokemon->probabilitySpecialAttack) {
            $attackValue *= $this->attachPokemon->specialAttack;
        }
        $p->hp -= $attackValue;
        return "$this->name attaque $p->name avec $attackValue dégâts !";
    }
}