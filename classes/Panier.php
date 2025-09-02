<?php

require_once __DIR__.'/ProduitInexistantException.php';

class Panier {
	/** @var array<string,float> */
	private array $produits = [];
	public function ajouter(string $nom, float $prix): void { $this->produits[$nom] = $prix; }
	public function getPrix(string $nom): float { if (!array_key_exists($nom, $this->produits)) { throw new ProduitInexistantException('Produit inexistant'); } return $this->produits[$nom]; }
}


$panier = new Panier();
$panier->ajouter('pomme', 1.2);
try {
	$panier->getPrix('banane');
} catch (Throwable $t) {
	echo "Produit inexistant: OK\n";
}
