<?php

class Pret
{
    //attributs
    protected float $k;
    protected float $tauxMensuel;
    protected int $nbMois;

    //Constructeur
    public function __construct(float $_k, float $_ta, float $_an)
    {
        $this->k = $_k;
        $this->tauxMensuel = $_ta / 1200;
        $this->nbMois = $_an * 12;
    }

    //proprietés
    public function getTauxMensuel()
    {
        return $this->tauxMensuel * 100;
    }

    public function getNbMois()
    {
        return $this->nbMois;
    }
    //---------------------------------------------------------------

    public function calculMensualite(): float
    {
        $quotient = (1 - pow((1 + $this->tauxMensuel), -$this->nbMois));
        $mensualite = ($this->k * $this->tauxMensuel) / $quotient;
        return round($mensualite, 2);   // 2 pour deux chiffres apres la virgule
    }

    public function tableauAmortissement(): string
    {
        $chaine = "<div class=\"table-wrapper\"><table><caption>Tableau d'amortissement prêt</caption><thead><tr><th>nombre de mois</th><th>part intérêt</th><th>part amortissement</th><th>capital restant dû</th><th>mensualité</th></tr></thead><tbody>";
        $numMois = 1;
        $capitalRestant = 0;
        $partInteret = 0;
        $partAmortissment = 0;
        $mensualite =  $this->calculMensualite();
        do {
            if ($numMois == 1) {
                $capitalRestant = $this->k;
            } else {
                $capitalRestant -= $partAmortissment;
            }
            $partInteret = $capitalRestant * $this->tauxMensuel;
            $partAmortissment = $mensualite - $partInteret;
            $chaine .= "<tr><td>" . $numMois . "</td><td>" . round($partInteret, 2) . "€ </td><td>" .  round($partAmortissment, 2) . " €</td><td>" . round($capitalRestant, 2) . "€ </td><td>" . round($mensualite, 2) . " € </td></tr>";
            $numMois++;
        } while ($numMois <= $this->nbMois);
        $chaine .= "</tbody></table></div>";
        return $chaine;
    }

    public function getTableauAmortissement(): array
    {
        $data = array();
        $partInteret = 0;
        $partAmortissement = 0;
        $mensualite =  $this->calculMensualite();
        $capitalRestant = $this->k;
        for ($i = 0; $i < $this->nbMois; $i++) {

            if ($i > 0) {
                $capitalRestant -= $partAmortissement;
            }
            $partInteret = $capitalRestant * $this->tauxMensuel;
            $partAmortissement = $mensualite - $partInteret;
            array_push($data, ["num_mois" => $i + 1, "partInteret" => round($partInteret, 2), "partAmortissement" => round($partAmortissement), "capital_restant" => round($capitalRestant, 2), "mensualite" => round($mensualite)]);
        }


        return $data;
    }
}
