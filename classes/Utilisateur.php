<?php

require_once __DIR__.'/EmailInvalideException.php';

class Utilisateur {
	public function __construct(public string $email) {
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { throw new EmailInvalideException('Email invalide'); }
	}
}


try {
	new Utilisateur('bad-email');
} catch (Throwable $t) {
	echo "Email invalide: OK\n";
}
