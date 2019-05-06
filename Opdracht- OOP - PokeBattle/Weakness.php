    
<?php
class Weakness
{
    public $EnergyType;
    public $Multiplier;
    public function __construct($energyt, $multip)
    {
        $this->EnergyType = $energyt;
        $this->Multiplier = $multip;
    }
}