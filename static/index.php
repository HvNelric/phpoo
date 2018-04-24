<?php
require_once 'Mouton.php';

$mouton1 = new Mouton();
// :: pour accéder à un attribut ou une méthode statique
echo Mouton::getNombre();
$mouton2 = new Mouton();
echo '<br>' . Mouton::getNombre();
$mouton3 = new Mouton();
echo '<br>' . Mouton::getNombre();

//Mouton::dummy();