<?php
require_once 'animal.php';

class Chat extends Animal
{

    public function crier(): string
    {
       return 'Miaouh Miahou';
    }

    /**
     * @return string
     *
     * ici on surcharge (redefinition) la méthode identifier de la classe Animal
     */
    public function identifier()
    {
        // grace à l'opérateur de résolution de portée :: on accède au contenu de la méthode identifier de la classe parente défini par le préfixe parent
        return parent::identifier().' et je suis un chat';
    }


}