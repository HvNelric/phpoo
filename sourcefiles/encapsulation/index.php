<?php
    require_once __DIR__ . '/User.php';

    $user = new User();

    //var_dump($user); // fatal error : on ne paut pas accéder à un attribut privé depuis l'objet instancié
    
    // appel du setter de l'attribut firstname
    $user->setFirstname('Hoan Vu');

    echo $user->getFirstname();

    $user->setLastname('Ngo');
    echo '<br>' . $user->getLastname();
    
    // appel du getter 
    $user2 = new User('Clara', 'Morgane');
    echo '<br>' . $user2->getFullname();
    echo '<br>' . $user2->__toString();

    // pour acceder à une constante de classe
    // depuis un objet instance de la classe
    echo '<br>nombre de yeux : ' . $user2::NB_YEUX;
    // depuis la class elle meme
    echo '<br>nombre de yeux : ' . User::NB_YEUX;


