<?php
class Person
{
    /*
     * attribut de class avec une valeur par défaut
     */
    public $firstname = 'Julien';
    
    /*
     * attribut de class sans valeur par défaut (= null)
     */
    public $lastname;
    
    /*
     * Une méthode est une fonction interne à la classe
     */
    public function bonjour($qui = null)
    {
        echo 'Bonjour';
        
        if (!empty($qui)) {
            echo ' ' . $qui;
        }
    }
    
    public function getFullname()
    {
        // $this fait  référence à l'objet à l'intérieur de la classe
        echo $this->firstname . ' ' . $this->lastname;
    }
}

// Instanciation de la classe = création d'un objet
$moi = new Person();
$lui = new Person();

// pour accéder à un attribut
echo $moi->firstname;
// modifier la valeur d'un attribut
$lui->firstname = 'Thomas';
echo '<br>' . $lui->firstname;
// l'attribut n'a pas changé pour l'autre objet de la même classe
echo '<br>' . $moi->firstname;

echo '<br>';
// appel de la méthode bonjour()
$moi->bonjour();
echo '<br>';
$moi->lastname = 'Anest';
$lui->lastname = 'Courdille';

$moi->getFullname();
echo '<br>';
$lui->getFullname();
echo '<br>';
$moi->bonjour($lui->firstname);