<?php

class Person{
    /*
    * attribut de class avec une valeur par défaut
    */
    public $firstname = 'Hoan Vu';

    /*
    * attribut de class sans valeur par defaut (= null)
    */
    public $lastname;

     /*
    * une methode est une fonction interne à la class
    */
    public function bonjour($qui = null){
        echo 'Bonjour';
        if(!empty($qui)) {
            echo ' ' . $qui;
        }
    }

    public function getFullname() {
        echo  $this->firstname . ' ' . $this->lastname; // $this fait reference à l'objet à l'interieur de la fonction
    }

    
}
// instanciation de la class = création d'un objet
$moi = new Person();

$elle = new Person();

// pour accéder à un attribut
echo $moi->firstname;

$elle->firstname = 'Laurine';

echo '<br>' . $moi->firstname; // l'attribut n'a pas changé pour l'autre objet de la meme class
echo '<br>' . $elle->firstname; 

// appel de la méthode bonjour
echo '<br>' . $moi->bonjour();

$moi->lastname = 'Ngo';
$elle->lastname = 'Macron';

echo '<br>';
$moi->getFullname();

echo '<br>';
$elle->getFullname();

echo '<p>$moi->bonjour($elle->getFullname());</p><br>';

$moi->bonjour($elle->firstname);
