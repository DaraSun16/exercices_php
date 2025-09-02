<?php

class Voiture {
	public $marque;
	private $vitesse;

	public function __construct($marque) {
		$this->marque = $marque;
	}

	public function afficherMarque() {
		echo "La marque de la voiture est: " . $this->marque . "<br>";
	}

	public function demarrer() {
		echo "la voiture " . $this->marque . " " . "démarre";
	}

	public function accelerer() {
		$this->vitesse = rand(10, 1000);
		echo "la voiture " . $this->marque . " " . "accélère à une vitesse de " . $this->vitesse . " " . "km/h";
	}

	public function getVitesse() {
		return $this->vitesse;
	}

	public function setVitesse($v) {
		if($v < 0) {
			echo "La vitesse ne peut pas être négative";
			return;
		} else {
			$this->vitesse = $v;
		}
	}
}

// Exemple (comme sur l'image)
$maVoiture = new Voiture("Citroen");
$maVoiture2 = new Voiture("Nissan");
$maVoiture3 = new Voiture("Toyota");
$maVoiture4 = new Voiture("Renault");

$maVoiture->afficherMarque();
$maVoiture->demarrer();

$maVoiture2->afficherMarque();
$maVoiture3->afficherMarque();
$maVoiture4->afficherMarque();
