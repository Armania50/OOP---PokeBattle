<?php
class Resistance
{
    public $EnergyType;
    public $Value;
    public function __construct($energyt, $val) {
        $this->EnergyType = $energyt;
        $this->Value = $val;
    }
}
// Test Completed