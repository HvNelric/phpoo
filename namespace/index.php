<?php
require_once 'Continent/Afrique/Elephant.php';
require_once 'Continent/Asie/Elephant.php';

// Pas de classe Elephant
// $elephant = new Elephant();

// Le nom complet de la classe
// (ou nom "pleinement qualifié")
//  est le nom de la classe précédé de som namespace
$elephant = new Continent\Afrique\Elephant();

$elephant2 = new Continent\Asie\Elephant();

echo $elephant->getTailleOreille(); // grandes
echo '<br>';
echo $elephant2->getTailleOreille(); // petites

