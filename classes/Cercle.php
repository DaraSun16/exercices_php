<?php

require_once __DIR__.'/Forme.php';

class Cercle extends Forme {
	public const PI = 3.141592653589793;
	public function __construct(public float $rayon) {}
	public function getSurface(): float { return self::PI * $this->rayon * $this->rayon; }
	public function aire(): float { return $this->getSurface(); }
}

$c = new Cercle(2);
echo "Surface cercle: ".$c->getSurface()."\n";
