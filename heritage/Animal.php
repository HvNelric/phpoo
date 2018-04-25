<?php
/*
 * Une classe abstraite peut être héritée
 * mais ne peut pas être instanciée
 */
abstract class Animal
{
    /**
     *
     * @var string 
     */
    protected $espece = 'indéfinie';
    
    private $test;
    
    /**
     * 
     * @return string
     */
    public function getEspece()
    {
        return $this->espece;
    }

    protected function afficheTest()
    {
        echo $this->test;
    }
    
    /**
     * Méthode abstraite
     * Toutes les classes qui héritent d'Animal
     * doivent implémenter cette méthode,
     * c-à-d la redéfinir avec du contenu
     */
    abstract public function crier();

    public function sIdentifier(){
        return 'Je suis un animal';
    }
}
