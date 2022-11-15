<?php

class Pompe {
    
    public TypeCarburant $typeCarburant;
    
    public int $contenuCuve;

    public function __construct($typeCarburant, $contenuCuve) {
        $this->typeCarburant = $typeCarburant;
        $this->contenuCuve = $contenuCuve;
    }

    /**
     * Get the value of typeCarburant
     */ 
    public function getTypeCarburant(): TypeCarburant
    {
        return $this->typeCarburant;
    }

    /**
     * Set the value of typeCarburant
     *
     * @return  self
     */ 
    public function setTypeCarburant($typeCarburant) : Pompe
    {
        $this->typeCarburant = $typeCarburant;
        return $this;
    }

    /**
     * Get the value of contenuCuve
     */ 
    public function getContenuCuve(): int
    {
        return $this->contenuCuve;
    }

    /**
     * Set the value of contenuCuve
     *
     * @return  self
     */ 
    public function setContenuCuve($contenuCuve): Pompe
    {
        $this->contenuCuve = $contenuCuve;

        return $this;
    }
}