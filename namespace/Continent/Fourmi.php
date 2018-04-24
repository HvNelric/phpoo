<?php
namespace Continent;

class Fourmi
{
    public function voirElephant($continent)
    {
        switch ($continent) {
            case 'afrique':
                // sous-namespace relatif
                // à celui dans lequel on se trouve
                $elephant = new Afrique\Elephant();
                break;
            case 'asie':
                $elephant = new Asie\Elephant();
                break;
        }
        
        echo $elephant->getTailleOreille();
    }
}
