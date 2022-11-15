<?php

    require_once 'Vehicule.php';

class Voiture extends Vehicule {

    public function __construct($nombreDeRoues=4) {
        $this->nombreDeRoues = $nombreDeRoues;
     }
}
