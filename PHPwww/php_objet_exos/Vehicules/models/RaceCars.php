<?php
require_once ('Motor.php');
require_once ('Class3.php');
require_once ('Cars.php');

/**
 * @version 1.0
 * @created 18-sept.-2024 16:14:46
 */
class RaceCars extends Voiture
{

	var $marque;
	var $model;
	var $poids;
	var $monMotor;

	/**
	 * 
	 * @param marque
	 * @param model
	 * @param poids
	 * @param monMotor
	 */

	 //------------constructeur-------------------
	public function __construct(string $_marque, string $_model, int $_poids, string $_monMotor)
	{
		$this->marque = $_marque;
		$this->model = $_model;
		$this->poids = $_poids;
		$this->monMotor = $_monMotor;	
	}
	
	//-----------proprietes-------------------------
	
	}
	