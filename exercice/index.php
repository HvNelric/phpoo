<?php
require_once 'autoload.php';

use Equipement\Pompe;
use Vehicule\Moto;
use Vehicule\Voiture;
/*
 * - Générer les getters et setters
 *   pour les 2 attributs de Vehicule
 *   -> 2 types de carburants possibles : essence et diesel
 * - Créer les classes Vehicule\Voiture et Vehicule\Moto
 *   qui héritent de Vehicule\Vehicule
 *   et en instancier 2 de chaque ici
 * 
 * - Ajouter 2 attributs contenanceReservoir et litresEssence
 *  au véhicule
 * - Créer une classe Equipement\Pompe avec contenance et litresEssence
 * - Ajouter une méthode fairePlein() au véhicule qui prend
 *   une pompe en paramètre qui remplit le reservoir du véhicule
 *   et enlève autant d'essence à la pompe
 * Bonus : prévoir le cas où la pompe de contient pas assez d'essence
 *  pour faire le plein
 * Bonus2 : ajouter un type d'essence à la pompe et jeter une exception
 * si on essaie de faire le plein à une pompe d'un autre type
 */

/*
 * Classe de base en PHP
$class = new stdClass();

$class->attr = 'attribut créé à la volée';
$class->autre = 'autre attribut';

var_dump($class);
*/

$voiture1 = new Voiture();
$voiture1
    ->setTypeCarburant('essence')
    ->setVitesseMax(180)
    ->setContenanceReservoir(50)
    ->setLitresEssence(20)
;

// en passant des paramètres au constructeur
// défini dans Vehicule
$voiture2 = new Voiture('diesel', 190, 60, 15);

$moto1 = new Moto();
$moto1
    ->setTypeCarburant('essence')
    ->setVitesseMax(200)
    ->setContenanceReservoir(20)
    ->setLitresEssence(5)
;

$moto2 = new Moto('essence', 210, 15, 10);

$pompe = new Pompe();
$pompe
    ->setContenance(1000)
    ->setLitresEssence(500)
    ->setTypeCarburant('essence')
;

echo 'Avant :';
echo '<br>litres dans le reservoir : ' . $moto2->getLitresEssence();
echo '<br>litres dans la pompe : ' . $pompe->getLitresEssence();

$moto2->fairePlein($pompe);

echo '<br>Après :';
echo '<br>litres dans le reservoir : ' . $moto2->getLitresEssence();
echo '<br>litres dans la pompe : ' . $pompe->getLitresEssence();

// test bonus 1
$pompe->setLitresEssence(10);

echo '<br>Avant :';
echo '<br>litres dans le reservoir : ' . $voiture1->getLitresEssence();
echo '<br>litres dans la pompe : ' . $pompe->getLitresEssence();

$voiture1->fairePlein($pompe);

echo '<br>Après :';
echo '<br>litres dans le reservoir : ' . $voiture1->getLitresEssence();
echo '<br>litres dans la pompe : ' . $pompe->getLitresEssence();


// test bonus 2
try {
    echo '<br>Avant :';
    echo '<br>litres dans le reservoir : ' . $voiture2->getLitresEssence();
    echo '<br>litres dans la pompe : ' . $pompe->getLitresEssence();

    $voiture2->fairePlein($pompe);

    echo '<br>Après :';
    echo '<br>litres dans le reservoir : ' . $voiture2->getLitresEssence();
    echo '<br>litres dans la pompe : ' . $pompe->getLitresEssence();
} catch (Exception $e) {
    echo '<br><strong>' . $e->getMessage() . '</strong>';
}