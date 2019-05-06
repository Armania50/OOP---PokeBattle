<style media="screen">
  body{
    background-image: url('img/pokemon.png');
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
    }
</style>
<img src="img/1.png" alt="charmeloen"
  style=" width: 501px;
    position: absolute;
    bottom: -108px;">
<img src="img/Pik.gif" alt="pikachu" style="    width: 501px;
    position: absolute;
    right: 123px;">
<?php
require 'Pokemon.php';
@@ -6,3 +21,34 @@
require 'Weakness.php';
$pokemon = new Pokemon("Pikachu", 60, 60, "Lightning");
$pokemon->Attack[] = new Attack("Electric Ring", 50);
$pokemon->Attack[] = new Attack("Pika Punch", 20);
$pokemon->Weakness = new Weakness("Fire", 1.5);
$pokemon->Resistance = new Resistance("Fighting", 20);
$pokemon2 = new Pokemon("Charmeleon", 60, 60, "Fire");
$pokemon2->Attack[] = new Attack("Head Butt", 10);
$pokemon2->Attack[] = new Attack("Flare", 30);
$pokemon2->Weakness = new Weakness("Water", 2);
$pokemon2->Resistance = new Resistance("Fire", 10);
?>
<div style="background : white; display: inline-block; padding: 10px;">
  <?php
echo $pokemon2->Name . " HP " . $pokemon2->Health . "/" . $pokemon2->Hitpoints;
echo '<br>';
echo $pokemon->Name . " HP " . $pokemon->Health . "/" . $pokemon->Hitpoints;
echo '<br>';
echo '<br>';
$pokemon->DoAttack($pokemon, $pokemon2, $pokemon2);
echo '<br>';
echo '<br>';
$pokemon2->DoAttack($pokemon2, $pokemon, $pokemon);
echo '<br>';
echo '<br>';
$pokemon->DoAttack($pokemon, $pokemon2, $pokemon2);
 ?>
</div>