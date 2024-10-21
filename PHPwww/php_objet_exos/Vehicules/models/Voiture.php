<?php
require_once('Motor.php');

/**
 * @version 1.0
 * @created 18-sept.-2024 16:14:55
 */
class Voiture
{
    //------------attributs----------------
    protected string $marque;
    protected string $model;
    protected int $poids;

    protected Motor $leMotor;

    /**
     * 
     * @param marque
     * @param model
     * @param poids
     * @param marqueMoteur
     * @param vitesseMax
     */

    //-----------Constructeur------------------
    public function __construct(string $_marque, string $_model, int $_poids, string $_marquemMoteur, int $_vitesseMax)
    {
        $this->marque = $_marque;
        $this->model = $_model;
        $this->poids = $_poids;
        $this->leMotor = new Motor($_marquemMoteur, $_vitesseMax);
    }

    //------------proprietes--------------
    public function getMarque(): string
    {
        return $this->marque;
    }
    public function getModel(): string
    {
        return $this->model;
    }
    public function getPoids(): int
    {
        return $this->poids;
    }


    /**
     * 
     * @param marque
     */

    public function setMarque(string $_marque): void
    {
        $this->marque = $_marque;
    }
    public function setModel(string $_model): void
    {
        $this->model = $_model;
    }
    public function setPoids(int $_poids): void
    {
        $this->poids = $_poids;
    }

    public function __toString(): string
    {
        return "{$this->getMarque()},{$this->getModel()}, {$this->getPoids()}, kg";
    }

    function calculVitesseMax(): float
    {
        $vitesseMax =  $this->leMotor->getVitesseMax() -  ($this->getPoids() * 0.3);

        return $vitesseMax;
    }
}

$maVoiture = new Voiture('Peugeot', '306', 1000, "moteur_citroen", 400);



echo $maVoiture->calculVitesseMax() . " km/h";
