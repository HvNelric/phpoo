<?php
namespace Vehicule;

use Equipement\Pompe;

abstract class Vehicule
{
    /**
     *
     * @var string Le type de carburant (essence ou diesel)
     */
    protected $typeCarburant;
    
    /**
     *
     * @var int La vitesse max du véhicule en km/h 
     */
    protected $vitesseMax;
    
    /**
     *
     * @var int Le nombre de litre que peut contenir le reservoir
     */
    protected $contenanceReservoir;
    
    /**
     *
     * @var int Le nombre de litre que contient le reservoir
     */
    protected $litresEssence;


    protected static $carburantsPossibles = [
        'essence',
        'diesel'
    ];

    public function __construct(
        $typeCarburant = null,
        $vitesseMax = null,
        $contenanceReservoir = null,
        $litresEssence = null
    ) {
        // on utilise les setters dans le constructeur
        $this
            ->setTypeCarburant($typeCarburant)
            ->setVitesseMax($vitesseMax)
            ->setContenanceReservoir($contenanceReservoir)
            ->setLitresEssence($litresEssence)
        ;
        
    }

        /**
     * @return int Le nombre de roues
     */
    abstract public function getNbRoues(): int;
    
    public function getTypeCarburant() {
        return $this->typeCarburant;
    }

    public function getVitesseMax() {
        return $this->vitesseMax;
    }

    // public function setTypeCarburant(string $typeCarburant = null)
    // {
    //     if (!is_null($typeCarburant)
    //         && !in_array($typeCarburant, self::$carburantsPossibles)) {
    //         throw new \UnexpectedValueException(
    //             'Le type de carburant doit être un des suivants : '
    //             . implode(', ', self::$carburantsPossibles)
    //         );
    //     }

    //     $this->typeCarburant = $typeCarburant;
    //     return $this;
    // }

    public function setVitesseMax(int $vitesseMax = null){
        $this->vitesseMax = $vitesseMax;
        return $this;
    }

    public function getContenanceReservoir() {
        return $this->contenanceReservoir;
    }

    public function getLitresEssence() {
        return $this->litresEssence;
    }

    public function setContenanceReservoir($contenanceReservoir)
    {
        $this->contenanceReservoir = $contenanceReservoir;
        return $this;
    }

    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;
        return $this;
    }

    public function fairePlein(Pompe $pompe)
    {
        if ($this->typeCarburant != $pompe->getTypeCarburant()) {
            throw new \Exception(
                'Mauvais choix de pompe'
            );
        }
        
        // nb de litres qu'il faut pour remplir le reservoir 
        $nbLitres = $this->contenanceReservoir - $this->litresEssence;
        
        // Si la pompe ne contient pas assez pour remplir le reservoir
        // on pourra mettre dans le reservoir ce que contient la pompe
        if ($pompe->getLitresEssence() < $nbLitres) {
            $nbLitres = $pompe->getLitresEssence();
        }
        
        // remplissage du reservoir
        $this->litresEssence = $this->litresEssence + $nbLitres;
        // équivalent :
        // $this->setLitresEssence($this->getContenanceReservoir());
        
        // diminuer la qté d'essence dans la pompe de ce qui a été mis
        // dans le reservoir du véhicule
        $nbLitresPompe = $pompe->getLitresEssence() - $nbLitres;
        $pompe->setLitresEssence($nbLitresPompe);
    }
}
