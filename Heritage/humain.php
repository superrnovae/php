<?php
    require_once 'chien.php';

class Humain {

    /**
     * @param Chien $chien
     */
    public function donnerFriandise(Chien $chien) {
        
        $chien->mangerFriandise();

    }
}