<?php
require_once  'AttackPokemon.php';

class Pokemon {
    private $name;
    private $url;
    private $hp;
    private $attackPokemon;

    public function __construct($name, $url, $hp, AttackPokemon $attackPokemon) {
        $this->name = $name;
        $this->url = $url;
        $this->hp = $hp;
        $this->attackPokemon = $attackPokemon;
    }

    public function isDead() {
        return $this->hp <= 0;
    }

    public function attack(Pokemon $p) {
        $damage = rand($this->attackPokemon->getAttackMinimal(), $this->attackPokemon->getAttackMaximal());

        if (rand(1, 100) <= $this->attackPokemon->getProbabilitySpecialAttack()) {
            $damage *= $this->attackPokemon->getSpecialAttack();
        }

        $p->hp -= $damage;
    }
    public function whoAmI() {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr><th colspan='2'>Pokemon Information</th></tr>";  // Table Header
        echo "<tr><td><strong>Name</strong></td><td>".$this->getName()."</td></tr>";
        echo "<tr><td><strong>Image</strong></td><td><img src='".$this->getUrl()."' alt='Pokemon Image' width='100'></td></tr>";
        echo "<tr><td><strong>Points</strong></td><td>".$this->getHp()."</td></tr>";
        echo "<tr><td><strong>Attack Range</strong></td><td>" . $this->getAttackPokemon()->getAttackMinimal() . " - " . $this->getAttackPokemon()->getAttackMaximal() . "</td></tr>";
        echo "<tr><td><strong>Special Attack Multiplier</strong></td><td>" . $this->getAttackPokemon()->getSpecialAttack() . "</td></tr>";
        echo "<tr><td><strong>Special Attack Probability</strong></td><td>" . $this->getAttackPokemon()->getProbabilitySpecialAttack() . "%</td></tr>";
        echo "<tr><td><strong>Type</strong></td><td>Normal ⭐</td></tr>";
        echo "</table>";
    }


    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }


    public function getUrl() {
        return $this->url;
    }

    public function setUrl($url) {
        $this->url = $url;
    }


    public function getHp() {
        return $this->hp;
    }

    public function setHp($hp) {
        $this->hp = $hp;
    }


    public function getAttackPokemon() {
        return $this->attackPokemon;
    }

    public function setAttackPokemon(AttackPokemon $attackPokemon) {
        $this->attackPokemon = $attackPokemon;
    }
}
?>
