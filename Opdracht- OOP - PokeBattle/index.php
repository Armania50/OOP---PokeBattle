<?php

require 'Superhero.php';
require 'Avenger.php';

$spiderman =  new Superhero('Spider-Man', 'Male', 'Spiderfriends', 'With great power comes great responsibility!');
 
 print_r('<pre>'. $spiderman . '</pre>');
 $spiderman->sayOneliner();
 
 $thor = new Avenger('Thor', 'Male', 'For Asgard!');
 $thor->sayOneliner();

print_r('<pre>' . $thor . '</pre>');