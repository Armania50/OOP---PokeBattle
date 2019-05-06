<?php
class Pokemon
{
    public $EnergyType;
    public $Hitpoints;
    public $Health;
    public $Attack;
    public $Weakness;
    public $Resistance;
    public function __construct($name, $energyType, $healthPoints, $hitPoints)
    {
        $this->Name = $name;
        $this->EnergyType = $energyType;
        $this->Health = $healthPoints;
        $this->Hitpoints = $hitPoints;
        $this->Attack = [];
    }
    function DoAttack($pokemon, $pokemon2, $target)
    {
      echo "attack";
        echo $this->Name . ' Will attack ' . $target->Name . ' Using ' . $this->Attack[0]->Name;
        echo '<br>';
        if ($pokemon->EnergyType == $pokemon2->Weakness->EnergyType) {
            $pokemon2->Health = $pokemon2->Health - ($pokemon->Attack[0]->AttackPoints * $pokemon2->Weakness->Multiplier);
        } else {
            $pokemon2->Health = $pokemon2->Health - $pokemon->Attack[0]->AttackPoints;
        }
        if ($pokemon2->Health < 1) {
            echo $pokemon2->Name . " Has Died ";
        } else {
            echo $pokemon2->Name . " Now Has " . $pokemon2->Health . " HP Left";
        }
    }
}