<?php
namespace Equipement;

class Pompe
{
    /**
     *
     * @var int Le nombre de litres que peut contenir la pompe
     */
    private $contenance;
    
    /**
     *
     * @var int Le nombre de litres que contient la pompe
     */
    private $litresEssence;
    
    /**
     *
     * @var string Le type de carburant (essence ou diesel)
     */
    private $typeCarburant;
    
    
    public function getContenance() {
        return $this->contenance;
    }

    public function getLitresEssence() {
        return $this->litresEssence;
    }

    public function setContenance($contenance)
    {
        $this->contenance = $contenance;
        return $this;
    }

    public function setLitresEssence($litresEssence)
    {
        $this->litresEssence = $litresEssence;
        return $this;
    }

    public function getTypeCarburant() {
        return $this->typeCarburant;
    }

    public function setTypeCarburant($typeCarburant) {
        $this->typeCarburant = $typeCarburant;
        return $this;
    }


}
