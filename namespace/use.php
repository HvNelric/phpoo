<?php
require_once 'autoload.php';

// use permet d'utiliser le nom court de la classe
// (sans le namespace) dans le reste du fichier
use Continent\Afrique\Elephant;
// Quand on utilise 2 classes avec le même nom court
// on en aliase une des 2
use Continent\Asie\Elephant as ElephantAsie;

use Number\Utils;


/*
 * les require des fichiers qui contiennent les classes
 * ne sont plus utiles grâce à l'autoload
require_once 'Continent/Afrique/Elephant.php';
require_once 'Continent/Asie/Elephant.php';
*/

// instanciation de Continent\Afrique\Elephant
$elephant = new Elephant();
// instanciation de Continent\Asie\Elephant
// qui a été aliasé ElephantAsie dans le use
$elephant2 = new ElephantAsie();

echo Utils::prixFr(3.5);
echo '<br>';

$humain = new Humain();
$humain->voirElephant($elephant);

