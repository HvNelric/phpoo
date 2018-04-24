<?php
namespace Continent\Afrique;

class Gazelle
{
    public function voirElephant()
    {
       // Elephant = Continent\Afrique\Elephant,
       // la classe Elephant déclarée dans le même namespace
       $elephant = new Elephant();
               
       echo $elephant->getTailleOreille();
    }
}
