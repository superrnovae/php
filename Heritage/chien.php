<?php
require_once 'animal.php';

class Chien extends Animal
{
    public function crier(): string
    {
        return 'Whouaff Whouafff';
    }

    public function mangerFriandise() {
        echo 'Miam';
    }
}