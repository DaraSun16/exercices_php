<?php

require_once __DIR__.'/CompteBancaire.php';

class CompteEpargne extends CompteBancaire {
	public function __construct(string $titulaire, public float $tauxInteret) { parent::__construct($titulaire); }
	public function calculerInteret(): float { return $this->getSolde() * $this->tauxInteret; }
}

$epargne = new CompteEpargne('Bob', 0.05);
$epargne->depot(200);
echo 'Intérêt: '.$epargne->calculerInteret()."\n";
