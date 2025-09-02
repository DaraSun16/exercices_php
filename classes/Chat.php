<?php

require_once __DIR__.'/Animal.php';
require_once __DIR__.'/AnimalInterface.php';

class Chat extends Animal implements AnimalInterface {
	public function parler(): string { return 'Miaou!'; }
}

$chat = new Chat('Mina');
echo $chat->parler()."\n";
