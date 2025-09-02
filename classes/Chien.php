<?php

class Chien {
	public string $chien;

	public function __construct(string $chien) {
		$this->chien = $chien;
	}

	public function aboyer(){
		echo $this->chien . "Ouaf";
	}
}

$animal = new Chien("Rex");
$animal->aboyer();
