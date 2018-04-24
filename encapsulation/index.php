<?php
require_once 'User.php';

$user = new User();

// Fatal error : on ne peut pas accéder à un attribut privé
// depuis l'objet instancié
//var_dump($user->firstname);

// appel du setter de l'attribut firstname
$user->setFirstname('Julien');
// appel du getter de l'attribut firstname
echo $user->getFirstname();

$user2 = new User();

// on peut enchaîner les appels aux setters
// parce qu'ils retournent $this
//  = fluent setters
$user2
    ->setFirstname('Liam')
    ->setLastname('Tardieu')
;

// le constructeur est appelé automatiquement
$user3 = new User('Neige', 'Laurence');
echo '<br>';
echo $user3;

// pour accéder à une constante de classe
// depuis un objet instance de la classe
echo '<br>' . $user::NB_YEUX;
// depuis la classe elle-même
echo '<br>' . User::NB_YEUX;