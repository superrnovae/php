<?php

    require_once 'Vehicule.php';

class Moto extends Vehicule {

    public function __construct($nombreDeRoues=2) {
        $this->nombreDeRoues = $nombreDeRoues;
     }
}