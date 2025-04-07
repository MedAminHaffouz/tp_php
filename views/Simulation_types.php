<?php 
require_once '../classes/ex3-4/AttackPokemon.php';
require_once '../classes/ex3-4/Pokemon.php';
require_once '../classes/ex3-4/PokemonFeu.php';
require_once '../classes/ex3-4/PokemonEau.php';
require_once '../classes/ex3-4/PokemonPlante.php';

// fight plante vs eau
$pokemon1 = new PokemonEau("Blastoise", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/009.png", 130, new AttackPokemon(10, 20, 1.5, 40));
$pokemon2 = new PokemonPlante("Venusaur", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/003.png", 115, new AttackPokemon(12, 22, 1.7, 35));

//fight plante vs feu
$pokemon3 = new PokemonPlante("Torterra", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/389.png", 140, new AttackPokemon(13, 23, 1.9, 30));
$pokemon4 = new PokemonFeu("Charizard", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/006.png", 120, new AttackPokemon(15, 25, 2.0, 35));

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokemon Battle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            text-align: center;
        }
        .battle-container {
            width: 60%;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .pokemon-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            border: 2px solid #ff9999;
            margin-bottom: 15px;
            border-radius: 10px;
            background: #ffe6e6;
        }
        .pokemon-info {
            width: 45%;
            text-align: left;
        }
        .pokemon-info img {
            width: 80px;
            height: 80px;
            display: block;
            margin: 10px auto;
        }
        .round {
            font-weight: bold;
            background-color: #ffcccc;
            padding: 10px;
            margin-top: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="battle-container ">
        <h2>Battle 1 Start!</h2>
        <hr>
        <?php
        $round = 1;
        while (!$pokemon1->isDead() && !$pokemon2->isDead()) {
            echo "<div class='round'>Round $round</div>";
            echo "<div class='pokemon-box'>";
            
            // Pokemon 1 attacks Pokemon 2
            $pokemon1->attack($pokemon2);
            echo "<div class='pokemon-info'>";
            $pokemon1->whoAmI();
            echo "</div>";
            echo "<div class='pokemon-info'>";
            $pokemon2->whoAmI();
            echo "</div>";
            echo "</div>";
            
            if ($pokemon2->isDead()) {
                echo "<h3> ".$pokemon2->getname(). " is dead! " .$pokemon1->getname()." wins!</h3>";
                
                break;
            }
            
            // Pokemon 2 attacks Pokemon 1
            echo "<div class='pokemon-box'>";
            $pokemon2->attack($pokemon1);
            echo "<div class='pokemon-info'>";
            $pokemon1->whoAmI();
            echo "</div>";
            echo "<div class='pokemon-info'>";
            $pokemon2->whoAmI();
            echo "</div>";
            echo "</div>";
            
            if ($pokemon1->isDead()) {
                echo "<h3> ".$pokemon1->getname(). " is dead! " .$pokemon2->getname()." wins!</h3>";
                break;
            }
            
            $round++;
        }
        ?>
    </div>
    <div class="battle-container">
        <h2>Battle 2 Start!</h2>
        <hr>
        <?php
        $round = 1;
        while (!$pokemon3->isDead() && !$pokemon4->isDead()) {
            echo "<div class='round'>Round $round</div>";
            echo "<div class='pokemon-box'>";
            
        
            $pokemon3->attack($pokemon4);
            echo "<div class='pokemon-info'>";
            $pokemon3->whoAmI();
            echo "</div>";
            echo "<div class='pokemon-info'>";
            $pokemon4->whoAmI();
            echo "</div>";
            echo "</div>";
            
            if ($pokemon4->isDead()) {
                echo "<h3> ".$pokemon4->getname(). " is dead! " .$pokemon3->getname()." wins!</h3>";
                break;
            }
            
        
            echo "<div class='pokemon-box'>";
            $pokemon4->attack($pokemon3);
            echo "<div class='pokemon-info'>";
            $pokemon3->whoAmI();
            echo "</div>";
            echo "<div class='pokemon-info'>";
            $pokemon4->whoAmI();
            echo "</div>";
            echo "</div>";
            
            if ($pokemon3->isDead()) {
                echo "<h3> ".$pokemon3->getname(). " is dead! " .$pokemon4->getname()." wins!</h3>";
                break;
            }
            
            $round++;
        }
        ?>
    </div>
</body>
</html>
