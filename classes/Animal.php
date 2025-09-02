<?php

class Animal { public function __construct(public string $nom) {} }

$animal = new Animal('Bête');
echo "Animal: ".$animal->nom."\n";
