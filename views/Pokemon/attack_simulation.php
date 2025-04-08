<?php 
require '../../classes/ex3/AttackPokemon.php';
require '../../classes/ex3/Pokemon.php';

$pokemon1 = new Pokemon("Pikachu", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/025.png", 100, new AttackPokemon(10, 20, 1.5, 30));
$pokemon2 = new Pokemon("Charmander", "https://www.pokemon.com/static-assets/content-assets/cms2/img/pokedex/full/006.png", 100, new AttackPokemon(8, 18, 2.0, 25));

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
    <div class="battle-container">
        <h2>Battle Start!</h2>
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
                echo "<h3>Pokemon 2 is dead! Pokemon 1 wins!</h3>";
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
                echo "<h3>Pokemon 1 is dead! Pokemon 2 wins!</h3>";
                break;
            }
            
            $round++;
        }
        ?>
    </div>
</body>
</html>
