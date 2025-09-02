<?php

require_once __DIR__.'/Deplacable.php';

class Avion implements Deplacable {
	public function __construct(public string $modele) {}
	public function deplacer(int $x, int $y): void { echo "L'avion {$this->modele} vole vers ({$x}, {$y})\n"; }
}

$avion = new Avion('A320');
$avion->deplacer(100, 200);
