<?php

require_once __DIR__.'/SoldeInsuffisantException.php';

class CompteBancaire {
	protected float $solde = 0.0;
	public function __construct(public string $titulaire) {}
	public function depot(float $montant): void { if ($montant <= 0) { throw new InvalidArgumentException('Montant de dépôt invalide'); } $this->solde += $montant; }
	public function retrait(float $montant): void {
		if ($montant <= 0) { throw new InvalidArgumentException('Montant de retrait invalide'); }
		if ($montant > $this->solde) { throw new SoldeInsuffisantException('Solde insuffisant'); }
		$this->solde -= $montant;
	}
	public function getSolde(): float { return $this->solde; }
}

$compte = new CompteBancaire('Alice');
$compte->depot(100);
echo 'Solde: '.$compte->getSolde()."\n";
