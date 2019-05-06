    
<?php
class Attack
{
    private $attackName;
    private $damage;
    Public function __construct($attackName, $attackPoints)
    {
        $this->attackName = $attackName;
        $this->attackPoints = $attackPoints;
    }
    public function getName(){
      return $this->attackName;
    }
    public function getDamage(){
      return $this->damage;
    }
}

// Test Completed
