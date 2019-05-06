    
<?php
class Attack
{
    public $Name;
    public $Damage;
    Public function __construct($attname, $atp)
    {
        $this->Name = $attname;
        $this->AttackPoints = $atp;
    }
}