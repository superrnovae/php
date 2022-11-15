<?php

/**
 * une classe abstraite ne sert qu'à être héritée, elle ne peut être instanciée
 */
abstract class Animal
{

    public function identifier()
    {

        return 'Je suis un animal';

    }

    /**
     * @return string
     *
     * une méthode abstraite ne peut être définie que dans une classe abstraite
     *
     * Les classes qui héritent d'Animal devront contenir cette méthode avec un contenu (on parle d'implementation de méthode)
     */
    abstract public function crier(): string;
}