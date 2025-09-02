<?php

require_once __DIR__.'/Vehicule.php';

class Velo extends Vehicule {
	public function __construct(public string $modele) {}
	public function rouler(): string { return "Le vélo {$this->modele} roule"; }
}


$velo = new Velo('VTT');
echo $velo->rouler()."\n";
