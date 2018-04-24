<?php

    class User{
        /**
         * Constante de class
         */
        const NB_YEUX = 2;

        /**
         * Le prénom de l'utilisateur
         * @var string
         */
        private $firstname;

        /**
         * Le nom de l'utilisateur
         * @var string
         */
        private $lastname;
       
        /**
         * Constructeur de la class
         * méthode appelée automatiquement à l'intanciation
         * 
         * @param string $lastname
         * @param string $firstname
         */
        public function __construct($lastname = null, $firstname = null){
            $this->lastname = $lastname;
            $this->firstname = $firstname;
        }

        /**
         * Get the value of firstname
         * @return string
         */ 
        public function getFirstname()
        {
                return $this->firstname;
        }

        /**
         * Set the value of firstname
         *
         * @return  self
         */ 
        public function setFirstname($firstname)
        {
                $this->firstname = $firstname;

                return $this;
        }

        /**
         * Get the value of lastname
         */ 
        public function getLastname()
        {
                return $this->lastname;
        }

        /**
         * Set the value of lastname
         *
         * @return  self
         */ 
        public function setLastname($lastname)
        {
                $this->lastname = $lastname;

                return $this;
        }

        public function getFullname() {
            return $this->getFirstname() . ' ' . $this->getLastname();
        }

        /**
         * Méthode magique appelée automatiquement
         * si elle existe dans la class
         * quand on essaie d'utiliser l'objet
         * comme une chaine de caractère (par ex. avec un echo)
         * 
         * @return string le nom complet de l'utilisateur
         */
        public function __toString() {
            return $this->firstname . ' ' . $this->lastname;
        }

    }