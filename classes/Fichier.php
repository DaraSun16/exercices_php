<?php

class Fichier {
	private SplFileObject $handle;
	public function __construct(string $chemin, string $mode = 'c+') {
		try { $this->handle = new SplFileObject($chemin, $mode); }
		catch (RuntimeException $e) { throw new RuntimeException('Impossible d\'ouvrir le fichier'); }
	}
	public function ecrire(string $contenu): void { $this->handle->fwrite($contenu); }
	public function lireTout(): string { $this->handle->rewind(); return implode('', iterator_to_array($this->handle)); }
}

$f = new Fichier(__DIR__.'/tmp_demo.txt');
$f->ecrire("Hello\n");
echo 'Fichier: '.trim($f->lireTout())."\n";
