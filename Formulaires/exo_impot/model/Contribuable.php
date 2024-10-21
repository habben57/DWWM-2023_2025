<?php
class Contribuable
{
    //attributs
    private string $nom;
    private string $prenom;   //attributs
    private float $revenu;
    // proprietés ( accesseur/ modifieur)   

    const taux1 = 0.09;           //constante static (meme valeur pour tous les objets)
    const taux2 = 0.14;           //  si modifier c'est modifier par tous les objets

    public function getRevenu(): float
    {
        return $this->revenu;
    }

    public function setRevenu(float $_new_revenu): void
    {
        $this->revenu = round($_new_revenu, 2);
    }

    //constructeur
    public function __construct(string $_nom, string $_prenom, float $_revenu)
    {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->revenu = round($_revenu, 2);
    }
    //methode (fonction ou procédures )

    public function calculImpot(): float
    {
        $impot = 0;
        if ($this->revenu <= 15000) {
            echo "cond1";
            $impot = $this->revenu * $this::taux1;
            $impot = round($impot, 2);                 //round = nombre de chiffre apres la virgule


        } else {
            //echo "cond2";
            $impot = 15000 * $this::taux1 + ($this->revenu - 15000) * $this::taux2;
            $impot = round($impot, 2);
        }
        return $impot;
    }
}
