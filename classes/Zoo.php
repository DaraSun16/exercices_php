<?php

require_once __DIR__.'/AnimalInterface.php';
require_once __DIR__.'/Chat.php';

class Zoo {
	/** @var AnimalInterface[] */
	private array $animaux = [];
	public function ajouter(AnimalInterface $animal): void { $this->animaux[] = $animal; }
	public function faireParler(): void { foreach ($this->animaux as $a) { echo $a->parler()."\n"; } }
}

$zoo = new Zoo();
$zoo->ajouter(new Chat('Mina'));
$zoo->faireParler();
