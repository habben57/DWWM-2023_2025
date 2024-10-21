<?php

class Dbconnect
{

      /**
       * @var Singleton
       * @access private
       * @static
       */
    private static ?PDO $connection = null;
    private const HOST = "localhost";
    private const DBNAME = "guide";
    private const USER = "root";
    private const PWD = "";


      /**
       * constructeur de la classe
       * 
       * @param void
       * @static
       */
    private function __construct() {}

      /** Méthode qui crée l'unique instance de la classe
       * si elle n'existe pas encore puis la retourne.
       *
       * @param void
       * @return Singleton
       */
    public static function getInstance()
    {
        if (is_null(self::$connection)) {
            self::$connection = new PDO("mysql:host=" . self::HOST . ";port=3306;dbname=" . self::DBNAME . ";charset=utf8", self::USER, self::PWD);
        }
        return self::$connection;
    }


    //------------- Structure d'une classe Singleton
    //Concrètement, un singleton est très simple à mettre en place. Il est composé de 3 caractéristiques :
    //-------Un attribut privé et statique qui conservera l'instance unique de la classe.
    //-------Un constructeur privé afin d'empêcher la création d'objet depuis l'extérieur de la classe
    // ------Une méthode statique qui permet soit d'instancier la classe soit de retourner l'unique instance créée.

    //
    public function tryConnect(): ?PDO
    {
        try {

            $myConnection = new PDO("mysql:host=$this->host;port=3306;dbname=$this->dbName;charset=utf8", $this->user, $this->mdp);

            return $myConnection;
        } catch (PDOException $e) {

            echo " erreur connexion :" . $e->getMessage();

            return null;
        }
    }
}
