<?php 

require_once 'PokemonEau.php';
require_once 'PokemonPlante.php';

class PokemonFeu extends Pokemon {
    public function attack(Pokemon $p) {
        $damage = rand($this->getAttackPokemon()->getAttackMinimal(), $this->getAttackPokemon()->getAttackMaximal());

        if (rand(1, 100) <= $this->getAttackPokemon()->getProbabilitySpecialAttack()) {
            $damage *= $this->getAttackPokemon()->getSpecialAttack();
        }
        
        // Fire is weak against Water
        if ($p instanceof PokemonEau) {
            $damage /= 2;
        }
        // Fire is strong against Grass
        else if ($p instanceof PokemonPlante) {
            $damage *= 2;
        }
        
        $p->setHp($p->getHp() - $damage);
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
        echo "<tr><td><strong>Type</strong></td><td>Fire 🔥</td></tr>";
        echo "</table>";
    }
}
?>
