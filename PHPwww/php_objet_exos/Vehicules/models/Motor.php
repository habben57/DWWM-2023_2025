<?php


/**
 * @author HBenmessaoud
 * @version 1.0
 * @created 18-sept.-2024 16:14:56
 */
class Motor
{
    //attributs
    protected string $marqueMoteur;
    protected int $vitesseMax;

    /**
     * 
     * @param marque
     * @param vitesseMax
     */
    function __construct(string $_marqueMoteur, int $_vitesseMax)
    {
        $this->marqueMoteur = $_marqueMoteur;
        $this->vitesseMax = $_vitesseMax;
    }

    function getMarqueMoteur(): string
    {
        return $this->marqueMoteur;
    }

    function getVitesseMax(): int
    {
        return $this->vitesseMax;
    }

    function setMarqueMoteur(string $_marqueMoteur): void
    {
        $this->marqueMoteur = $_marqueMoteur;
    }

    function setVitesseMax(int $_vitesseMax): void
    {
        $this->vitesseMax = $_vitesseMax;
    }



    function __toString(): string
    {
        return "{$this->getMarqueMoteur()},{$this->getVitesseMax()}";
    }
}
// $monMoteur = new Motor('Peugeot', 1000);
// echo $monMoteur;
