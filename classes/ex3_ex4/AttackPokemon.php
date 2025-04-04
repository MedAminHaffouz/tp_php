<?php

class AttackPokemon
{
    public $attackMinimal;
    public $attackMaximal;
    public $specialAttack;
    public $probabilitySpecialAttack;

    function __construct($mina,$maxa,$speca,$proba){
        $this->attackMinimal=$mina;
        $this->attackMaximal=$maxa;
        $this->specialAttack=$speca;
        $this->probabilitySpecialAttack=$proba;
    }


}