<?php
require_once 'autoload.php';

/* Animal ne peut pas être instancié 
 * parce que la classe est déclarée abstraite
$animal = new Animal();
echo $animal->getEspece();
 */

echo '<br>';

$chien = new Chien();
echo $chien->getEspece();
//$chien->getTest();
// Erreur : la méthode est protégée
// $chien->afficheTest();

echo '<br>';

$chat = new Chat();
echo $chat->getEspece();
echo '<br>';
$chat->crier();