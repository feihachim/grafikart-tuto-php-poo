<?php

namespace Tutoriel;

require 'class/Autoloader.php';

Autoloader::register();

use \Tutoriel\Personnage;
use \Tutoriel\Archer;

$merlin = new Personnage('Merlin');
$harry = new Personnage('Harry');

$legolas = new Archer('Legolas');
$legolas->attaque($harry);

var_dump($merlin, $harry, $legolas);
