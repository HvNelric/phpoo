<?php

// Chien hérite d'Animal
class Chien extends Animal
{
    protected $espece = 'chien';
    
    public function getTest()
    {
        // $test est déclaré private dans animal
        // donc n'est pas défini dans la classe fille
        echo $this->test;
    }
    
    public function afficheTestPublic()
    {
        // on peut utiliser une méthode ou un attribut protégé
        // de la classe mère dans la classe fille
        echo $this->afficheTest();
    }
    
    public function crier()
    {
        echo 'Ouaf';
    }

}
