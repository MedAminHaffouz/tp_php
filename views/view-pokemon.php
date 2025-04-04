<?php
require_once '../classes/Pokemon.php';
$pokemon1=new Pokemon('pikachu','../assets/pokemon/pikachu.png',100,10,20,2,30);
$pokemon2=new Pokemon('blue pokemon','../assets/pokemon/blue_pok.png',80,5,15,1.5,10);
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Pookemon fight</title>
    </head>
    <body>
        <div>
            <?php $pokemon1->whoAmI();?>
        </div>
    </body>
</html>