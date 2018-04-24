<?php

class User
{
    /**
     * Constante de classe
     */
    const NB_YEUX = 2;


    /**
     * Le prénom de l'utilisateur
     *
     * @var string
     */
    private $firstname;
    
    /**
     * Le nom de l'utilisateur
     *
     * @var string
     */
    private $lastname;
    
    /**
     * Constructeur de la classe
     * méthode appelée automatiquement à l'instanciation 
     * 
     * @param string $lastname
     * @param string $firstname
     */
    public function __construct($lastname = null, $firstname = null)
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
    }

        /**
     * Getter de l'attribut firstname
     * 
     * @return string
     */
    public function getFirstname() {
        return $this->firstname;
    }

    /**
     * Getter de l'attribut lastname
     * 
     * @return string
     */
    public function getLastname() {
        return $this->lastname;
    }

    /**
     * Setter de l'attribut firstname
     * 
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname) {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Setter de l'attribut lastname
     * 
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname) {
        $this->lastname = $lastname;
        return $this;
    }

    /**
     * Méthode "magique" appelée automatiquement
     * si elle existe dans la classe
     * quand on essaie d'utiliser l'objet
     * comme une chaîne de caractères (par ex. avec un echo)
     * 
     * @return string Le nom complet de l'utilisateur
     */
    public function __toString()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
}
