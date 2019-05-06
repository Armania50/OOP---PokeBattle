<style media="screen">
  body{
    background-image: url('img/pokemon.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    }
</style>

<?php

require 'Pokemon.php';
require 'Charmeleon.php';
require 'Pikachu.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

//Create new pokemon
$pokemon = new Pikachu();
//Create new pokemon
$pokemon2 = new Charmeleon();

?>
<div style="background : white; display: inline-block; padding: 10px;">
  <?php
//Defines the attack, name and the health from each pokemon. And show the current status from each pokemon.
//Pikachu
echo $pokemon->getName() . " HP " . $pokemon->getHealth();
echo '<br>';
//Charmeleon
echo $pokemon2->getName() . " HP " . $pokemon2->getHealth();
echo '<br>';
echo '<br>';

$pokemon->DoAttack($pokemon2);
echo '<br>';
echo '<br>';

$pokemon2->DoAttack($pokemon);
echo '<br>';
echo '<br>';

$pokemon->DoAttack($pokemon2);
 ?>
</div>
<!--Test Completed -->

