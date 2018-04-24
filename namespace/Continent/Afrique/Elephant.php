<?php
namespace Continent\Afrique;

use Humain;

class Elephant
{
    private $tailleOreille = 'grandes';
    
    public function getTailleOreille() {
        return $this->tailleOreille;
    }

    public function etreVu()
    {
        // sans le use Humain en haut du fichier, le moteur chercherait
        // une classe Humain dans le namespace dans lequel on se trouve
        // soit Continent\Afrique\Humain
        $humain = new Humain();
        $humain->voirElephant($this);
    }
}
