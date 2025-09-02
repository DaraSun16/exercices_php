<?php

require_once __DIR__.'/Personne.php';

class Employe extends Personne {
	public function __construct(string $nom, int $age, public float $salaire) { parent::__construct($nom, $age); }
}


$emp = new Employe('Eve', 40, 3500);
echo 'Employe: '.$emp->sePresenter()."\n";
