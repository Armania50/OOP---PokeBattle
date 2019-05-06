<?php
class Charmeleon extends Pokemon{
  public function __construct()
  {
    parent::__construct("Charmeleon", 60, 60, "Fire");
    $this->attacks[] = new Attack("Flare", 30);
    $this->attacks[] = new Attack("Head Butt", 10);
    $this->Weakness = new Weakness("water", 2);
    $this->Resistance = new Resistance("fire", 10);
  }
}