<?php

class Personne {
	public static int $compteurInstances = 0;
	public function __construct(public string $nom, public int $age) { self::$compteurInstances++; }
	public function sePresenter(): string { return "Je m'appelle {$this->nom}, j'ai {$this->age} ans."; }
}


$p = new Personne('Alice', 30);
echo $p->sePresenter()."\n";
