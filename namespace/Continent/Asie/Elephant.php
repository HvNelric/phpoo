<?php
namespace Continent\Asie;

class Elephant
{
    private $tailleOreille = 'petites';
    
    public function getTailleOreille()
    {
        return $this->tailleOreille;
    }
    
    public function etreVu()
    {
        // sans le \ devant Humain, le moteur chercherait
        // une classe Humain dans le namespace dans lequel on se trouve
        // soit Continent\Asie\Humain
        $humain = new \Humain();
        $humain->voirElephant($this);
    }
}