<?php

require_once __DIR__.'/Personne.php';

class Etudiant extends Personne {
	public function __construct(string $nom, int $age, public string $niveau) { parent::__construct($nom, $age); }
	public function sePresenter(): string { return parent::sePresenter()." Je suis étudiant(e) niveau {$this->niveau}."; }
}


$et = new Etudiant('Bob', 20, 'L3');
echo $et->sePresenter()."\n";
