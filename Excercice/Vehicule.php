<?php

    require_once "Pompe.php";

abstract class Vehicule {

    public TypeCarburant $typeCarburant;
    
    protected int $vitesseMax;

    public int $vitesse = 0;

    public int $contenanceReservoir;

    public int $contenuReservoir;

    public int $nombreDeRoues;

    function __construct() 
    {
        
    }

    function accelerer($km) : Vehicule {
        if($this->vitesse + $km <= $this->vitesseMax){
             $this->vitesse += $km;
        }
        else {
            $this->vitesse = $this->vitesseMax;
        }
        return $this;
     }
 
 
     /**
      * Get the value of nombreDeRoues
      */ 
     public function getNombreDeRoues() : int
     {
         return $this->nombreDeRoues;
     }
 
     /**
      * Get the value of contenuReservoir
      */ 
     public function getContenuReservoir() : int
     {
         return $this->contenuReservoir;
     }
 
     /**
      * Set the value of contenuReservoir
      *
      * @return  self
      */ 
     public function setContenuReservoir($contenuReservoir) : Vehicule
     {
         $this->contenuReservoir = $contenuReservoir;
         return $this;
     }
 
     /**
      * Get the value of contenanceReservoir
      */ 
     public function getContenanceReservoir() : int
     {
         return $this->contenanceReservoir;
     }
 
     /**
      * Set the value of contenanceReservoir
      *
      * @return  self
      */ 
     public function setContenanceReservoir($contenanceReservoir) : Vehicule
     {
         $this->contenanceReservoir = $contenanceReservoir;
         return $this;
     }
 
     /**
      * Get the value of vitesse
      */ 
     public function getVitesse() : int
     {
         return $this->vitesse;
     }
 
     /**
      * Set the value of vitesse
      *
      * @return  self
      */ 
     public function setVitesse($vitesse) : Vehicule
     {
        $this->vitesse = $vitesse <= $this->vitesseMax ? $vitesse : $this->vitesseMax;
        return $this;
     }
 
     /**
      * Get the value of vitesseMax
      */ 
     public function getVitesseMax() : int
     {
         return $this->vitesseMax;
     }
 
     /**
      * Get the value of typeCarburant
      */ 
     public function getTypeCarburant() : TypeCarburant
     {
         return $this->typeCarburant;
     }
 
     /**
      * Set the value of typeCarburant
      *
      * @return  self
      */ 
     public function setTypeCarburant(TypeCarburant $typeCarburant) : Vehicule
     {
        $this->typeCarburant = $typeCarburant;
        return $this;
     }

    /**
     * Set the value of vitesseMax
     *
     * @return  self
     */ 
    public function setVitesseMax($vitesseMax) : Vehicule
    {
        $this->vitesseMax = $vitesseMax;
        return $this;
    }

     public function fairePlein(Pompe $pompe) : void {

        if(!($this->typeCarburant == $pompe->getTypeCarburant())){
            return;
        }

        $missing = $this->contenanceReservoir-$this->contenuReservoir;

        if ($missing > $pompe->getContenuCuve()) {
            $this->setContenuReservoir($this->contenuReservoir+$pompe->getContenuCuve());
            $pompe->setContenuCuve(0);
        }
        else {
            $this->setContenuReservoir($this->contenuReservoir+$missing);
            $pompe->setContenuCuve($pompe->getContenuCuve()-$missing);
        }
     }
}