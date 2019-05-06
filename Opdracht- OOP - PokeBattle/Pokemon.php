<?php
class Pokemon
{
    public $EnergyType;
    public $Hitpoints;
    public $Health;
    public $Attack;
    public $Weakness;
    public $Resistance;
    public function __construct($nm, $healthp, $hitp, $et)
    {
        $this->Name = $nm;
        $this->EnergyType = $et;
        $this->Health = $healthp;
        $this->Hitpoints = $hitp;
        $this->Attack = [];
    }
}