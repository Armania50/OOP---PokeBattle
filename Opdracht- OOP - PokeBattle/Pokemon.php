<?php
class Pokemon
{
    protected $energyType;
    protected $hitPoints;
    protected $health;
    protected $attacks;
    protected $weakness;
    protected $resistance;
    protected $name;

    public function __construct($name, $energyType, $health, $hitPoints)
    {
        $this->name = $name;
        $this->energyType = $energyType;
        $this->health = $health;
        $this->hitpoints = $hitPoints;
        $this->attacks = [];
    }

    public function getName()
    {
      return $this->name;
    }

    public function getHealth()
    {
      return $this->health;
    }

    public function getHitPoints()
    {
      return $this->hitPoints;
    }


    function DoAttack($target)
    {
        echo $this->name . ' Will attack ' . $target->getName() . ' Using ' . $this->attacks[0]->getName();
        echo '<br>';
        if ($this->energyType == $target->Weakness->energyType) {
            $target->health = $target->health - ($this->attacks[0]->attackPoints * $target->weakness->multiplier);
        } else {
            $target->health = $target->health - $this->attacks[0]->attackPoints;
        }

        if ($target->health < 1) {
            echo $target->name . " Has Died ";
        } else {
            echo $target->name . " Now Has " . $target->health . " HP Left";
        }
    }
}
// Test Completed